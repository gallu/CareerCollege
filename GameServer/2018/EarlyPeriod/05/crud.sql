Create	INSERT
-- 一般的
INSERT テーブル名(カラム名, カラム名)
       VALUES(値, 値);
-- MySQL(MariaDB)限定
INSERT SET テーブル名
   カラム名=値, カラム名=値, カラム名=値;

Update	UPDATE
-- 全レコード対象(まれ)
UPDATE SET テーブル名
   カラム名=値, カラム名=値;
-- 特定のレコード対象(普通はこっち)
UPDATE SET テーブル名
   カラム名=値, カラム名=値
  WHERE カラム名=この条件;

Delete	DELETE
-- 全レコード対象(普通やらない)
DELETE FROM テーブル名;
-- 特定レコード対象(普通はこっち)
DELETE FROM テーブル名
  WHERE カラム名=この条件;

Read	SELECT
-- 業務だとあんまりやらない
SELECT * FROM テーブル名;
-- 件数を把握するとき(pkが主キーのカラム名)
SELECT count(pk) FROM テーブル名;
-- 中身を軽く見るとき(MySQL)
SELECT * FROM テーブル名 LIMIT 0, 5;
--
SELECT * FROM テーブル名
 WHERE カラム名=条件;

SELECT * FROM テーブル名
 WHERE カラム名=条件
 ORDER BY カラム名[ DESC]; -- 順番を整頓する

