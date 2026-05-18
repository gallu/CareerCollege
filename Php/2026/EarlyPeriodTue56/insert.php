
mysql  -u  ec_sample_user  -p  ec_sample
ec_sample_pass

CREATE TABLE `items` (
  `item_id` bigint unsigned NOT NULL AUTO_INCREMENT COMMENT '商品ID',
  `item_name` varchar(128) NOT NULL COMMENT '商品名',
  `category_id` bigint unsigned NOT NULL COMMENT 'カテゴリID',
  `price` int unsigned NOT NULL COMMENT '価格',
  `release_at` datetime DEFAULT NULL COMMENT '発売開始日(NULLなら発売日未定)',
  `sale_end_at` datetime DEFAULT NULL COMMENT '発売終了日(NULLなら発売終了日未定)',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '作成日',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修正日',
  PRIMARY KEY (`item_id`),
  UNIQUE KEY `item_id` (`item_id`),
  KEY `fk_items_category_id` (`category_id`),
  CONSTRAINT `fk_items_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='1レコードが1商品を意味するテーブル'
