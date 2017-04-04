DROP TABLE IF EXISTS gacha_type;
CREATE TABLE gacha_type (
  `gacha_type_id` int unsigned NOT NULL COMMENT 'ガチャタイプを識別するためのID',
  `gacha_type_name` varchar(128) NOT NULL COMMENT 'ガチャタイプ名',
  `cost_type` int NOT NULL COMMENT 'ガチャを引くのにかかるコストのタイプ 0:無料コイン 1:有料コイン',
  `cost` int NOT NULL COMMENT 'ガチャを引くのにかかるコスト',
  PRIMARY KEY (`gacha_type_id`)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが「１セットのガチャ」を意味するテーブル';
INSERT INTO gacha_type SET gacha_type_id='1', gacha_type_name='ノーマルガチャ', cost_type='0', cost='100';
INSERT INTO gacha_type SET gacha_type_id='2', gacha_type_name='プレミアムガチャ', cost_type='1', cost='200';


DROP TABLE IF EXISTS gacha;
CREATE TABLE gacha (
  `gacha_type_id` int unsigned NOT NULL COMMENT 'ガチャタイプを識別するためのID',
  `card_id` int unsigned NOT NULL COMMENT '取得できるカードを識別するためのID',
  `probability` int unsigned NOT NULL COMMENT '取得確率',
  PRIMARY KEY (`gacha_type_id`, `card_id`)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが「1つのガチャの１アイテム」を意味するテーブル';
INSERT INTO gacha SET gacha_type_id='1', card_id='1', probability='10';
INSERT INTO gacha SET gacha_type_id='1', card_id='2', probability='10';
INSERT INTO gacha SET gacha_type_id='1', card_id='3', probability='10';
INSERT INTO gacha SET gacha_type_id='1', card_id='4', probability='10';
INSERT INTO gacha SET gacha_type_id='1', card_id='5', probability='10';
INSERT INTO gacha SET gacha_type_id='1', card_id='6', probability='10';
INSERT INTO gacha SET gacha_type_id='1', card_id='7', probability='10';
INSERT INTO gacha SET gacha_type_id='1', card_id='8', probability='10';
INSERT INTO gacha SET gacha_type_id='1', card_id='9', probability='10';
INSERT INTO gacha SET gacha_type_id='1', card_id='10', probability='2';
INSERT INTO gacha SET gacha_type_id='1', card_id='11', probability='2';
INSERT INTO gacha SET gacha_type_id='1', card_id='12', probability='2';
INSERT INTO gacha SET gacha_type_id='1', card_id='13', probability='2';
INSERT INTO gacha SET gacha_type_id='1', card_id='14', probability='1';
INSERT INTO gacha SET gacha_type_id='1', card_id='15', probability='1';
INSERT INTO gacha SET gacha_type_id='2', card_id='9', probability='15';
INSERT INTO gacha SET gacha_type_id='2', card_id='10', probability='15';
INSERT INTO gacha SET gacha_type_id='2', card_id='11', probability='15';
INSERT INTO gacha SET gacha_type_id='2', card_id='12', probability='15';
INSERT INTO gacha SET gacha_type_id='2', card_id='13', probability='15';
INSERT INTO gacha SET gacha_type_id='2', card_id='14', probability='15';
INSERT INTO gacha SET gacha_type_id='2', card_id='15', probability='10';



DROP TABLE IF EXISTS cards;
CREATE TABLE cards (
  `card_id` int unsigned NOT NULL COMMENT 'カードを識別するためのID',
  `card_name` varchar(128) NOT NULL COMMENT 'カード名',
  `attack` int unsigned NOT NULL COMMENT '攻撃力',
  `defense` int unsigned NOT NULL COMMENT '防御力',
  `flavor_text` text NOT NULL COMMENT 'フレーバーテキスト',
  PRIMARY KEY (`card_id`)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが1枚のカードを意味するテーブル';
INSERT INTO cards SET card_id='1', card_name='コボルト', attack='5', defense='5', flavor_text='キング of 雑魚';
INSERT INTO cards SET card_id='2', card_name='ゴブリン', attack='6', defense='4', flavor_text='一般的な雑魚';
INSERT INTO cards SET card_id='3', card_name='スケルトン', attack='10', defense='2', flavor_text='ポピュラーなアンデッド';
INSERT INTO cards SET card_id='4', card_name='ゾンビ', attack='8', defense='6', flavor_text='ポピュラーなアンデッド';
INSERT INTO cards SET card_id='5', card_name='スライム', attack='20', defense='15', flavor_text='意外と強いよ？';
INSERT INTO cards SET card_id='6', card_name='インプ', attack='15', defense='20', flavor_text='ちょこまかやかましい';
INSERT INTO cards SET card_id='7', card_name='ホブゴブリン', attack='30', defense='10', flavor_text='ホブってるから強い';
INSERT INTO cards SET card_id='8', card_name='オーク', attack='50', defense='25', flavor_text='場所によっては豚扱い';
INSERT INTO cards SET card_id='9', card_name='キャリオンクロウラー', attack='100', defense='50', flavor_text='トラウマになりうるモンスター';
INSERT INTO cards SET card_id='10', card_name='エレメンタル', attack='150', defense='150', flavor_text='いわゆる精霊たち';
INSERT INTO cards SET card_id='11', card_name='ガーゴイル', attack='200', defense='250', flavor_text='魔法生物としてはおなじみ';
INSERT INTO cards SET card_id='12', card_name='ヴァンパイア', attack='400', defense='300', flavor_text='おつよいアンデッド';
INSERT INTO cards SET card_id='13', card_name='ケルベロス', attack='1000', defense='500', flavor_text='三つ首のワンコ';
INSERT INTO cards SET card_id='14', card_name='ジャバウォック', attack='1500', defense='1500', flavor_text='魔獣。正体不明で怖い';
INSERT INTO cards SET card_id='15', card_name='ドラゴン', attack='5000', defense='5000', flavor_text='問答無用系モンスター';


-- 決まった時間になったらtruncateする(と、引けるようになる)
-- TRUNCATE TABLE daily_gacha;
DROP TABLE IF EXISTS daily_gacha;
CREATE TABLE daily_gacha (
  `user_id` int unsigned NOT NULL COMMENT 'ユーザを識別するためのID',
  PRIMARY KEY (`user_id`)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが「今日、無料がちゃを引いたかどうか」を意味するテーブル';


DROP TABLE IF EXISTS users_deck;
CREATE TABLE users_deck (
  `users_deck_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '「１ユーザの１枚のカード」を識別するためのID',
  `user_id` int unsigned NOT NULL COMMENT 'ユーザを識別するためのID',
  `card_id` int unsigned NOT NULL COMMENT 'カードを識別するためのID',
  `created` datetime NOT NULL COMMENT 'カード取得日',
  PRIMARY KEY (`users_deck_id`)
);

