-- 問い合わせテーブル
DROP TABLE IF EXISTS inquirys;
CREATE TABLE inquirys (
  inquiry_id INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ユニークなID',
  email VARCHAR(320) NOT NULL COMMENT '問い合わせ者のメアド',
  inquiry_body TEXT NOT NULL COMMENT '問い合わせ内容',
  name VARCHAR(620) NOT NULL COMMENT '名前',
  birthday DATE COMMENT '誕生日',
  PRIMARY KEY (`inquiry_id`)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='１レコードが「一件の問い合わせ」を意味するテーブル';
-- 返信用の追加
ALTER TABLE inquirys ADD status TINYINT DEFAULT 0 COMMENT '0:未返信, 1:返信作業中, 2:返信済';
ALTER TABLE inquirys ADD response_body TEXT COMMENT '返信内容';
ALTER TABLE inquirys ADD response_date DATETIME COMMENT '返信日時';

-- 管理者用テーブル
DROP TABLE IF EXISTS admin_users;
CREATE TABLE admin_users (
  admin_user_id varbinary(64) NOT NULL COMMENT '管理者のID',
  password varbinary(255) NOT NULL COMMENT '管理者のパスワード',
  PRIMARY KEY (`admin_user_id`)
)CHARACTER SET 'utf8mb4'
, ENGINE=InnoDB
, COMMENT='１レコードが１管理者を意味するテーブル';
-- ダミーの管理者
INSERT INTO admin_users(admin_user_id, password)
  VALUES('admin', '$2y$10$/mAKC8fesgijPeG8juIDre5WDEmvrq6DWCwpfsjeIRZCv.e.1D8zq');


