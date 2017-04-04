-- 「有料貨幣」を管理するテーブル
CREATE TABLE coin (
   user_id int unsigned not null,
   coin_num int unsigned not null,
   primary key(`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;


-- 「カード」を管理するテーブル
CREATE TABLE card (
   id int unsigned not null auto_increment,
   user_id int unsigned not null,
   card_id int unsigned not null,
   primary key(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- 事前準備
insert into coin(user_id, coin_num) values(1, 0);

--
select * from coin;

-- まず課金してお金を入れる
update coin set coin_num=1000 where user_id=1;
select * from coin;

/*
 -------------------------------------------------
 */

/*
  課金してガチャをまわす一連の流れ
*/
-- 手持ちの金額を確認して
select * from coin where user_id=1;
-- お金を書き換えて
update coin set coin_num=900 where user_id=1;
-- カードを入手
insert into card(user_id, card_id) values(1, 10);
-- 確認
select * from coin where user_id=1;
select * from card where user_id=1;

/*
 -------------------------------------------------
 */

-- 「お金のupdate」でエラーが起きた場合

/*
 -------------------------------------------------
 */

-- 「カードのinsert」でエラーが起きた場合

/*
 -------------------------------------------------
 */

-- 「二つの端末で同時にがちゃを引いた」時の問題
>> 端末A >>
-- 手持ちの金額を確認して
select * from coin where user_id=1;

>> 端末B >>
-- 手持ちの金額を確認して
select * from coin where user_id=1;

>> 端末A >>
-- お金を書き換えて
update coin set coin_num=700 where user_id=1;
-- カードを入手
insert into card(user_id, card_id) values(1, 10);
-- 確認
select * from coin where user_id=1;
select * from card where user_id=1;

>> 端末B >>
-- お金を書き換えて
update coin set coin_num=700 where user_id=1;
-- カードを入手
insert into card(user_id, card_id) values(1, 10);
-- 確認
select * from coin where user_id=1;
select * from card where user_id=1;

/*
 トランザクションを使ってみる
 -------------------------------------------------
 */

-- (あんまり意味のない)base
select * from card where user_id=1;
begin;
insert into card(user_id, card_id) values(1, 10);
commit;

select * from card where user_id=1;
begin;
insert into card(user_id, card_id) values(1, 10);
rollback;


-- 「お金のupdate」でエラーが起きた場合
-- トランザクション開始
begin;
-- お金を書き換えて
update coin set coin_num=700a where user_id=1;
-- カードを入手
insert into card(user_id, card_id) values(1, 10);
-- トランザクション終了(破棄)
rollback;
-- 確認
select * from coin where user_id=1;
select * from card where user_id=1;

-- 「カードのinsert」でエラーが起きた場合
-- トランザクション開始
begin;
-- お金を書き換えて
update coin set coin_num=700 where user_id=1;
-- カードを入手
insert into card(user_ida, card_id) values(1, 10);
-- トランザクション終了(破棄)
rollback;
-- 確認
select * from coin where user_id=1;
select * from card where user_id=1;


-- 「二つの端末で同時にがちゃを引いた」時の問題
>> 端末A >>
-- トランザクション開始
begin;
-- 手持ちの金額を確認して
select * from coin where user_id=1 for update;

>> 端末B >>
-- トランザクション開始
begin;
-- 手持ちの金額を確認して
select * from coin where user_id=1 for update;

>> 端末A >>
-- お金を書き換えて
update coin set coin_num=600 where user_id=1;
-- カードを入手
insert into card(user_id, card_id) values(1, 10);
-- 確認
select * from coin where user_id=1;
select * from card where user_id=1;
-- トランザクション終了
commit;

>> 端末B >>
-- お金を書き換えて
update coin set coin_num=500 where user_id=1;
-- カードを入手
insert into card(user_id, card_id) values(1, 10);
-- 確認
select * from coin where user_id=1;
select * from card where user_id=1;
-- トランザクション終了
commit;



/*
 課金モノのSQLのパターン
 */
`begin;` でトランザクション開始
SELECT `for update` で所持金確認
UPDATEで所持金を減算
INSERTまたはUPDATEでアイテム等を付与
`commit;` でトランザクション終了
(問題があったらrollback;で取り消し)

