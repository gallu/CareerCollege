<?php  // sql7.php
require_once __DIR__ . '/dbh.php';

$dbh = DbHandle::get();
// 

// プリペアドステートメント(準備された文)を作成
$sql = 'SELECT count(*) as cnt FROM address_books;';
$pre = $dbh->prepare($sql);
// var_dump($pre);

// プレースホルダに値をバインド
// [memo]今回はプレースホルダがないので省略

// SQLを実行
$r = $pre->execute();
var_dump($r);

// データを取り込む
$data = $pre->fetchAll();
var_dump($data);

