mysql  -u  XXXX  -p  XXXX
XXXX

CREATE TABLE int_1 (
  num   TINYINT
);
-- データを読む
SELECT  *  FROM  int_1;
-- データを入れる
INSERT  int_1(num)  VALUES(10);
INSERT  int_1(num)  VALUES(20);
INSERT  int_1(num)  VALUES('abc');
INSERT  int_1(num)  VALUES('100');
INSERT  int_1(num)  VALUES(500);


--------------
CREATE TABLE int_2 (
  num1   INT ,
  num2   INT
);
--
INSERT  int_2(num1, num2)  VALUES(10, 11);
INSERT  int_2(num1, num2)  VALUES(30, 31);
--
SELECT  *  FROM  int_2;

------------------------
CREATE TABLE char_1 (
  str_1  CHAR(16),
  str_2  VARCHAR(16)
);
--
INSERT INTO char_1(str_1, str_2) VALUES('aaa', 'aaa2');
INSERT INTO char_1(str_1, str_2) VALUES('bbb', 'bbb3');
--
SELECT  *  FROM  char_1;
SELECT  *  FROM  char_1  WHERE  str_1='aaa';
SELECT  *  FROM  char_1  WHERE  str_1='AAA';


------------------------
CREATE TABLE char_2 (
  str_1  BINARY(16),
  str_2  VARBINARY(16)
);
--
INSERT INTO char_2(str_1, str_2) VALUES('aaa', 'aaa2');
INSERT INTO char_2(str_1, str_2) VALUES('bbb', 'bbb3');
--
SELECT  *  FROM  char_2;
SELECT  *  FROM  char_2  WHERE  str_1='aaa'; -- 検索不可
SELECT  *  FROM  char_2  WHERE  str_2='aaa2';
SELECT  *  FROM  char_2  WHERE  str_2='AAA2';


---------------
CREATE  TABLE  user_cards (
    id  BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id  BIGINT ,
    card_id  INT,
    PRIMARY KEY(id) -- 主キー
);
--
INSERT INTO user_cards(user_id, card_id) VALUES(1, 10);
INSERT INTO user_cards(user_id, card_id) VALUES(1, 11);
INSERT INTO user_cards(user_id, card_id) VALUES(1, 20);
INSERT INTO user_cards(user_id, card_id) VALUES(2, 10);
INSERT INTO user_cards(user_id, card_id) VALUES(2, 30);
--
SELECT  *  FROM  user_cards;

