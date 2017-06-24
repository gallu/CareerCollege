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

-- 初期値
INSERT INTO coin(user_id, coin_num) VALUES(100, 0);

-- 金額を付与
SELECT * FROM coin WHERE user_id=100;
UPDATE coin SET coin_num=1000 WHERE user_id=100;
SELECT * FROM coin WHERE user_id=100;

/*
  課金してガチャをまわす一連の流れ
*/
-- 手持ちの金額を確認して
SELECT * FROM coin WHERE user_id=100;
-- お金を書き換えて
UPDATE coin SET coin_num=coin_num-100 WHERE user_id=100;
-- カードを入手
INSERT INTO card(user_id, card_id) VALUES(100, 10);

-- 確認
SELECT * FROM coin WHERE user_id=100;
SELECT * FROM card WHERE user_id=100;

-- 「お金のupdate」でエラーが起きた場合
--
SELECT * FROM coin WHERE user_id=XXX;
--
UPDATE coin SET coin_num=coin_num-a WHERE user_id=XXX;
--
INSERT INTO card(user_id, card_id) VALUES(XXX, 10);


-- 「カードのinsert」でエラーが起きた場合
--
SELECT * FROM coin WHERE user_id=XXX;
--
UPDATE coin SET coin_num=coin_num-100 WHERE user_id=XXX;
--
INSERT INTO card(user_id, card_id) VALUES(XXX, abc);

-- トランザクションを使ってみる(不完全)
--
BEGIN;
--
SELECT * FROM coin WHERE user_id=XXX;
UPDATE coin SET coin_num=coin_num-100 WHERE user_id=XXX;
INSERT INTO card(user_id, card_id) VALUES(XXX, abc);
--
--COMMIT;
ROLLBACK;
--
SELECT * FROM coin WHERE user_id=XXX;

-- トランザクションを使ってみる(完全)
--
BEGIN;
--
SELECT * FROM coin WHERE user_id=XXX FOR UPDATE;
UPDATE coin SET coin_num=coin_num-100 WHERE user_id=XXX;
INSERT INTO card(user_id, card_id) VALUES(XXX, 15);
--
COMMIT;
--
SELECT * FROM coin WHERE user_id=XXX;


-- 「(有料課金)アイテムを使う」場合
BEGIN;
SELECT アイテムの残数はあるか？ FOR UPDATE;
(プログラムでエフェクト実行)
UPDATE アイテム残数 -1;
COMMIT;



