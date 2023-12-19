<?php  // sql5.php
require_once __DIR__ . "/dbh.php";

$dbh = DbHandle::get();
// var_dump($dbh);

// SELECT * FROM address_books LIMIT 10 OFFSET 0;
$limit = 10;
$offset = 0;

// プリペアドステートメント（準備された文）を作成する
$sql = 'SELECT * FROM address_books LIMIT :limit OFFSET :offset;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
$pre->bindValue(":limit", $limit, PDO::PARAM_INT);
$pre->bindValue(":offset", $offset, PDO::PARAM_INT);

// SQLを実行する
$r = $pre->execute();
var_dump($r);

// データを取得する
$data = $pre->fetchAll();
var_dump($data);

