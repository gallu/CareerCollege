-- ユーザテーブル
CREATE TABLE users (
    user_id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ユーザID',
    login_id VARBINARY(128) NOT NULL UNIQUE KEY COMMENT 'ログイン用のID',
    password VARBINARY(128) NOT NULL COMMENT 'hash化されたパスワード',
    user_name VARCHAR(32) NOT NULL COMMENT 'ユーザ名',
    PRIMARY KEY(user_id)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが１ユーザを意味するテーブル';

