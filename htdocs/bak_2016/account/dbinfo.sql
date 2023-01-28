DROP TABLE users;
CREATE TABLE users(
  user_id  varbinary(128) not null,
  password  varbinary(128) not null,
  memo  text,
  PRIMARY KEY(user_id)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB;


/*
科目テーブル：「１レコードが１つの科目を意味するテーブル」
*/
DROP TABLE subjects;
CREATE TABLE subjects(
  subject_id  int unsigned not null auto_increment,
  subject_name varchar(64),
  type    tinyint,/* -- 1なら入金科目、2なら出金科目 */
  activation_flg tinyint,/* -- 1なら有効、0なら無効 */
  PRIMARY KEY(subject_id)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB;
