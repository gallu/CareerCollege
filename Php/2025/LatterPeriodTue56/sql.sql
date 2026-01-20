mysql -u ec_sample_user -p --skip-binary-as-hex ec_sample
ec_sample_pass


SELECT 1;
SELECT 1+2+3;

SELECT 'Hello SQL World.';

SELECT NOW();

SELECT * FROM categories;
SELECT * FROM items;
SELECT * FROM items \G

SELECT item_id,item_name,price FROM items;

SELECT * FROM categories;
SELECT * FROM categories WHERE category_id = 1;
SELECT * FROM categories WHERE category_name = '飲料';

SELECT * FROM categories WHERE category_id = 9999;

SELECT * FROM items \G
SELECT * FROM items WHERE item_name = '紅茶' \G
SELECT * FROM items WHERE price >= 500 \G
SELECT * FROM items WHERE price >= 500 AND category_id = 3 \G

SELECT * FROM items WHERE price >= 500 AND price <= 800 \G
SELECT * FROM items WHERE price BETWEEN 500 AND 800 \G

SELECT * FROM categories;

SELECT * FROM categories WHERE category_id = 1 OR category_id = 3 OR category_id = 5;
SELECT * FROM categories WHERE category_id IN (1, 3, 5);

SELECT * FROM items WHERE category_id IN (1, 3, 5) AND price BETWEEN 500 AND 800;

SELECT * FROM items WHERE release_at >= '2025-01-01 00:00:00' \G
SELECT * FROM items WHERE release_at BETWEEN '2024-01-01 00:00:00' AND '2024-12-31 23:59:59';

SELECT * FROM items WHERE sale_end_at = NULL; -- これはダメ
SELECT * FROM items WHERE sale_end_at IS NULL \G
SELECT * FROM items WHERE sale_end_at IS NOT NULL \G

/*
   a = 3, b = 4, c = NULLとする。このとき、次の式の真理値を答えよ。
     1. a > b AND b > c
     2. a > b OR b > c
     3. a < b OR b < c
     4. NOT( a = c)
*/
SELECT 3 > 4 AND 4 > NULL; -- 0
SELECT 3 > 4 OR 4 > NULL; -- NULL
SELECT 3 < 4 OR 4 < NULL; -- 1
SELECT NOT(3 = NULL); -- NULL

-- 
SELECT 'a' = 'a'; -- 1
SELECT 'a' = 'b'; -- 0
SELECT 'a' = 'A'; -- 1
SELECT BINARY('a') = BINARY('A'); -- 0

-- 
SELECT  * FROM users ;
SELECT  * FROM users \G

SELECT * FROM users WHERE user_name = '花岡 明日' \G
SELECT * FROM users WHERE user_name LIKE '花岡%' \G
SELECT * FROM users WHERE user_name LIKE '西%' \G

SELECT  * FROM users LIMIT 2;
SELECT  * FROM users LIMIT 2 OFFSET 0;

SELECT user_id, user_name, email FROM users ;

SELECT user_id, user_name, email FROM users ORDER BY user_id;
SELECT user_id, user_name, email FROM users ORDER BY user_id DESC;

SELECT user_id, user_name, email FROM users ORDER BY email;

SELECT user_id, user_name, email FROM users ORDER BY user_id LIMIT 5 OFFSET 3;

SELECT user_id, user_name, email
  FROM users
 ORDER BY user_id
 LIMIT 5 OFFSET 3
;

SELECT user_id, user_name, email
  FROM users
 WHERE email LIKE '%@example.com' -- このドメインの一覧がほしいっていわれた: 2025/10/28 XXさんから
 ORDER BY user_name
;

SELECT count(*) FROM items;
SELECT SUM(price) FROM items;
SELECT AVG(price) FROM items;
SELECT AVG(price) FROM items WHERE category_id=1;
SELECT AVG(price) FROM items WHERE category_id=2;
SELECT AVG(price) FROM items WHERE category_id=3;
SELECT STDDEV_POP(price) FROM items WHERE category_id = 2;

-- 
SELECT * FROM categories;
SELECT * FROM items LIMIT 2 \G
SELECT * FROM categories WHERE category_id=1;

SELECT *
  FROM items
       LEFT JOIN categories
         ON items.category_id = categories.category_id
 LIMIT 10
OFFSET 0
\G

SELECT *
  FROM items
       INNER JOIN categories
         ON items.category_id = categories.category_id
 LIMIT 10
OFFSET 0
\G


SELECT items.*, categories.category_name
  FROM items
       LEFT JOIN categories
         ON items.category_id = categories.category_id
 LIMIT 10
OFFSET 0
\G

SELECT items.*, categories.category_name
  FROM items
       LEFT JOIN categories
         ON items.category_id = categories.category_id
 WHERE items.category_id IN (1, 2, 3)
 LIMIT 10
OFFSET 0
\G

SELECT items.*, categories.category_name
  FROM items
       LEFT JOIN categories
            USING (category_id)
 WHERE items.category_id IN (1, 2, 3)
 LIMIT 10
OFFSET 0
\G

-- 
SELECT * FROM tags;
SELECT * FROM items_tags;


SELECT * 
  FROM items_tags
\G

SELECT * 
  FROM items_tags
       LEFT JOIN items
         ON items_tags.item_id = items.item_id
\G

SELECT * 
  FROM items_tags
       LEFT JOIN items
         ON items_tags.item_id = items.item_id
       LEFT JOIN tags
         ON items_tags.tag_id = tags.tag_id
\G

SELECT items.item_name
       , tags.tag_name
  FROM items_tags
       LEFT JOIN items
         ON items_tags.item_id = items.item_id
       LEFT JOIN tags
         ON items_tags.tag_id = tags.tag_id
;

SELECT items.item_name
       , tags.tag_name
  FROM items_tags
       LEFT JOIN items
         ON items_tags.item_id = items.item_id
       LEFT JOIN tags
         ON items_tags.tag_id = tags.tag_id
 WHERE tags.tag_id = 1 -- セールだけほしい
;

SELECT items.item_name
       , categories.category_name
       , tags.tag_name
  FROM items_tags
       LEFT JOIN items
         ON items_tags.item_id = items.item_id
       LEFT JOIN tags
         ON items_tags.tag_id = tags.tag_id
       LEFT JOIN categories
         ON items.category_id = categories.category_id
 WHERE tags.tag_id = 1 -- セールだけほしい
;

-- 
SELECT *
  FROM sales_slips
\G

SELECT *
  FROM sales_slip_details
\G

SELECT *
  FROM sales_slip_details
       LEFT JOIN sales_slips
         ON sales_slip_details.sales_slip_id = sales_slips.sales_slip_id
\G

-- 
SELECT COUNT(*) FROM items;

SELECT COUNT(*),category_id
  FROM items
 GROUP BY category_id
;

SELECT AVG(price),category_id
  FROM items
 GROUP BY category_id
;

--  SELECT list is not in GROUP BY clause and contains nonaggregated column 'ec_sample.items.price' 
/*
SELECT price,category_id
  FROM items
 GROUP BY category_id
;
*/

SELECT price, COUNT(*)
  FROM items
 GROUP BY price
;

SELECT price, COUNT(*)
  FROM items
 GROUP BY price
HAVING COUNT(*) > 1
;

SELECT item_name, COUNT(*)
  FROM items
 GROUP BY item_name
HAVING COUNT(*) > 1
;

ーー 
SELECT * FROM categories;
SELECT * FROM items LIMIT 2 \G

SELECT * FROM items WHERE category_id = 1;
SELECT * FROM categories WHERE category_name = 'くだもの';

-- まとめて(サブクエリ)
SELECT * 
  FROM items 
 WHERE category_id IN (
    SELECT category_id
      FROM categories
     WHERE category_name = 'くだもの'
 )
;

-- 
INSERT INTO テーブル名(カラム名, カラム名, ...) VALUES(値, 値, ....);
INSERT テーブル名 SET カラム名=値, カラム名=値, カラム名=値, カラム名=値, ...; -- MySQL固有

INSERT INTO users(user_name, email) VALUES(値, 値);
SELECT * FROM users;

-- バルクインサート
INSERT INTO テーブル名(カラム名, カラム名, ...)
 VALUES
 (値, 値, ....),
 (値, 値, ....),
 (値, 値, ....),
 (値, 値, ....),
 (値, 値, ....),
 (値, 値, ....)
;

-- 
UPDATE テーブル名 SET カラム=値, ... WHERE 条件;
UPDATE テーブル名 SET カラム=値, ... ; -- 危険！！！！

-- 
DELETE FROM テーブル名 WHERE 条件;
DELETE FROM テーブル名 ; -- 超危険！！！！！

-- UPSERT(UPDATE + INSERT)
(INSERT文)
ON DUPLICATE KEY UPDATE
(UPDATE文)

-- 
BEGIN;
SELECT ....  FOR UPDATE;
INSERT ...
UPDATE ...
DELETE ...
COMMIT; -- 結果を永続化

BEGIN;
SQL文
SQL文
SQL文 -- 失敗
ROLLBACK; -- 全部なかったことに

-- 
数値
    整数
        TINYINT 1byte  (-128~127 / 0~255)
        INT     4bytes (2147483647 / 4294967295)
        BIGINT  8bytes (9223372036854775807 / 18446744073709551615)
    実数(小数点数)
        浮動小数点数
            FLOAT   4bytes
            DOUBLE  8bytes
        固定小数点数
            DECIMAL
            NUMERIC
文字
    CHAR
    VARCHAR
    TEXT
        TINYTEXT
        TEXT
        LONGTEXT
    BINARY
    VARBINARY
    BLOB
        TINYBLOB
        BLOB
        LONGBLOB
日付
    YEAR
    DATE    '1000-01-01' から '9999-12-31'
    TIME    '-838:59:59' から '838:59:59'
    TIMESTAMP   '1970-01-01 00:00:01' UTC から '2038-01-19 03:14:07' UTC 
    DATETIME     '1000-01-01 00:00:00' から '9999-12-31 23:59:59'
JSON
座標（ジオロケーション

-- 
主キー(PRIMARY KEY) PK
    (候補キー)
    自然キー
        複合主キー
    人工キー(サロゲートキー)
        AUTO_INCREMENT
        UUID
        ULID

FOREIGN KEY(外部キー制約) FK

UNIQUE

INDEX

NOT NULL(NULL)

削除フラグ
    TINYINT(BOOL)   0, 1
    DATETIME    NULL, NOT NULL

