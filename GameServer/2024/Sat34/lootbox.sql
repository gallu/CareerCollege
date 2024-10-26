/*
game2024
game2024_u
game2024_p
*/
DROP TABLE IF EXISTS cards;
CREATE TABLE cards (
  `card_id` SERIAL COMMENT 'カードを識別するためのID',
  `card_name` varchar(128) NOT NULL COMMENT 'カード名',
  -- `attack` int unsigned NOT NULL COMMENT '攻撃力',
  -- `defense` int unsigned NOT NULL COMMENT '防御力',
  -- `flavor_text` text NOT NULL COMMENT 'フレーバーテキスト',
  PRIMARY KEY (`card_id`)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが1枚のカードを意味するテーブル';

DROP TABLE IF EXISTS lootbox_types;
CREATE TABLE lootbox_types (
  `lootbox_type_id` SERIAL COMMENT 'ガチャタイプを識別するためのID',
  `lootbox_type_name` varchar(128) NOT NULL COMMENT 'ガチャタイプ名',
  -- `cost_type` int NOT NULL COMMENT 'ガチャを引くのにかかるコストのタイプ 0:無料>コイン 1:有料コイン',
  -- `cost` int NOT NULL COMMENT 'ガチャを引くのにかかるコスト',
  -- from_at DATETIME NOT NULL default '1970-1-1 00:00:00' COMMENT 'ガチャ有効開始時間',
  -- to_at DATETIME default NOT NULL default '2999-12-31 23:59:59' COMMENT 'ガチャ有効終了時間',
  PRIMARY KEY (`lootbox_type_id`)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが「１セットのガチャ>」を意味するテーブル';

DROP TABLE IF EXISTS lootboxes;
CREATE TABLE lootboxes (
  `lootbox_id` SERIAL ,
  `lootbox_type_id` BIGINT UNSIGNED NOT NULL COMMENT 'ガチャタイプを識別するためのID',
  `card_id` BIGINT UNSIGNED NOT NULL COMMENT 'カードを識別するためのID',
  `probability` INT UNSIGNED NOT NULL COMMENT '確率',
  -- ユニーク制約
  UNIQUE KEY (`lootbox_type_id`, `card_id`), -- 「ガチャタイプ」でカードIDがかぶらないように
  -- 外部キー制約
  FOREIGN KEY (card_id) REFERENCES cards(card_id),
  FOREIGN KEY (lootbox_type_id) REFERENCES lootbox_types(lootbox_type_id),
  -- 
  PRIMARY KEY (`lootbox_id`)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが「１セットのガチャの1枚のカード」を意味するテーブル';

-- *******************************
INSERT INTO cards SET card_id='1', card_name='コボルト';
INSERT INTO cards SET card_id='2', card_name='ゴブリン';
INSERT INTO cards SET card_id='3', card_name='オーク';
INSERT INTO cards SET card_id='4', card_name='グール';
INSERT INTO cards SET card_id='5', card_name='ジャイアント';
INSERT INTO cards SET card_id='6', card_name='ドラゴン';

-- 
INSERT INTO lootbox_types SET lootbox_type_id='1', lootbox_type_name='普通のガチャ';
INSERT INTO lootbox_types SET lootbox_type_id='2', lootbox_type_name='ドラゴン特攻ガチャ';

-- 
INSERT INTO lootboxes SET lootbox_id='1', lootbox_type_id='1', card_id='1', probability='40';
INSERT INTO lootboxes SET lootbox_id='2', lootbox_type_id='1', card_id='2', probability='30';
INSERT INTO lootboxes SET lootbox_id='3', lootbox_type_id='1', card_id='3', probability='15';
INSERT INTO lootboxes SET lootbox_id='4', lootbox_type_id='1', card_id='4', probability='10';
INSERT INTO lootboxes SET lootbox_id='5', lootbox_type_id='1', card_id='5', probability='4';
INSERT INTO lootboxes SET lootbox_id='6', lootbox_type_id='1', card_id='6', probability='1';
-- 
INSERT INTO lootboxes SET lootbox_id='101', lootbox_type_id='2', card_id='4', probability='25';
INSERT INTO lootboxes SET lootbox_id='102', lootbox_type_id='2', card_id='5', probability='25';
INSERT INTO lootboxes SET lootbox_id='103', lootbox_type_id='2', card_id='6', probability='50';



