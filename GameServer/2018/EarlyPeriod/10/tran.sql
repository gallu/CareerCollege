振込
---------------------------
A		B
\1,000,000	\1,000,000
---------------------------
	AさんがBさんに\500,000振込
1)	\500,000
2)			\1,500,000
	\500,000	\1,500,000
---------------------------
1はうまくいったが2で処理がコケた
1)	\500,000
2)			コケた
	\500,000	\1,000,000
---------------------------
1がコケたけど2はうまくいった
1)	コケた
2)			\1,500,000
	\1,000,000	\1,500,000
---------------------------
1も2もコケた
1)	コケた
2)			コケた
	\1,000,000	\1,000,000

---------------------------------------
AさんがBさんに\500,000振込
	トランザクション開始(BEGIN)
1)	\500,000
2)			\1,500,000
	トランザクション終了(COMMIT)
	\500,000	\1,500,000
---------------------------------------
1はうまくいったが2で処理がコケた
	トランザクション開始(BEGIN)
1)	\500,000
2)			コケた
	トランザクション巻き戻し(ROLLBACK)
	\1,000,000	\1,000,000



受け取りテーブル
	受け取りアイテムの情報

ユーザ
	魔晶石数
-----------------------------
	１番はうまくいったけど２番がコケた
BEGIN
1)	受け取りテーブルから魔晶石レコードをDELETE
2)	ユーザの魔晶石数をUPDATE(……できなかった)
COMMIT / ROLLBACK


ユーザカードテーブル
	素材になるカードのレコード(群)
	強化対象のカード
---
１番は成功、２番はコケた
BEGIN
1)	素材になるカード(群)のDELETE
2)	強化対象のカード情報のUPDATE
COMMIT / ROLLBACK


端末Aのカード「ID:12」を端末Bにトレードする

	端末A		端末B		端末B'
	-----------------------------------------
探す	SELECT WHERE ID=12
送る	INSERT 送るテーブル

確認			SELECT 送るテーブル
確認			SELECT WHERE ID=12
カード移動		DELETE WHERE ID=12
			INSERT ID12と同じカード
			DELETE 送るテーブル


	端末A		端末B		端末B'
	-----------------------------------------
探す	SELECT WHERE ID=12
送る	INSERT 送るテーブル

確認			SELECT 送るテーブル
確認			SELECT WHERE ID=12
カード移動		DELETE WHERE ID=12
			INSERT ID12と同じカード
			DELETE 送るテーブル

確認					SELECT 送るテーブル
					ないから受け取れない


	端末A		端末B		端末B'
	-----------------------------------------
探す	SELECT WHERE ID=12
送る	INSERT 送るテーブル

確認			SELECT 送るテーブル
確認			SELECT WHERE ID=12
確認					SELECT 送るテーブル
確認					SELECT WHERE ID=12
カード移動		DELETE WHERE ID=12
			＊INSERT ID12と同じカード
			DELETE 送るテーブル
カード移動				DELETE WHERE ID=12
					＊INSERT ID12と同じカード
					DELETE 送るテーブル


	端末A		端末B		端末B'
	-----------------------------------------
探す	SELECT WHERE ID=12
送る	INSERT 送るテーブル

			BEGIN
確認			SELECT 送るテーブル FOR UPDATE
確認			SELECT WHERE ID=12 FOR UPDATE
					BEGIN
確認					SELECT 送るテーブル:ロック
カード移動		DELETE WHERE ID=12
			INSERT ID12と同じカード
			DELETE 送るテーブル
			COMMIT
					(ロック解除)
確認					SELECT 送るテーブル
					レコードがない



SQL

BEGIN; -- トランザクション開始

	SELECT ..... FOR UPDATE; -- 行ロック

COMMIT; -- トランザクション終了
ROLLBACK; -- トランザクション廃棄(巻き戻し)


アイテムを使う


BEGIN;
SELECT * FROM ユーザアイテム WHERE ユーザID; -- 所持確認
UPDATE ユーザアイテム SET 個数 = 個数 - 1;
UPDATE * FROM ？？？ WHERE ユーザID; -- 効果発動
COMMIT;





デイリー無料ガチャロックテーブル (
	日付,
	ユーザID,
	PRIMARY KEY(日付, ユーザID)
); -- INSERTできたらガチャが引ける

---------------------
$カードID = がちゃを引く関数('無料');
BEGIN;
INSERT INTO デイリー無料ガチャロックテーブル(日付,ユーザID);
INSERT INTO ユーザカード(ユーザID, $カードID);
COMMIT;


有料課金がちゃ


$カードID = がちゃを引く('有料');
BEGIN;
SELECT * FROM ユーザ情報 WHERE ユーザID FOR UPDATE; -- 確認
UPDATE ユーザ情報 SET 石 = 石 - 値段 WHERE ユーザID;
INSERT INTO ユーザカード(ユーザID, $カードID);
COMMIT;


ユーザ：A
	魔晶石：10

----
魔晶石 = 魔晶石 - 10;

----
// CAS
function 魔晶石減算($今の値, $引く値) {
   if (userの今の値 !== $今の値) {
       return false;
   }
   // else
   今の値 -= $引く値;
   return true;
}




