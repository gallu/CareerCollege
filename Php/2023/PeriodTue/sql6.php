<?php  // sql6.php
require_once __DIR__ . '/dbh.php';

$dbh = DbHandle::get();
// 
$limit = 5;
$offset = 0;
// プリペアドステートメント(準備された文)を作成
$sql = '
SELECT *
  FROM address_books
       LEFT JOIN prefecture_table
            ON prefecture_table.prefecture_code = address_books.prefecture_code
 LIMIT :limit OFFSET :offset
;';
$pre = $dbh->prepare($sql);
// var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(":limit", $limit, PDO::PARAM_INT);
$pre->bindValue(":offset", $offset, PDO::PARAM_INT);

// SQLを実行
$r = $pre->execute();
var_dump($r);

// データを取り込む
$data = $pre->fetchAll();
var_dump($data);

