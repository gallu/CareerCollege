<?php  // sql7.php
require_once __DIR__ . "/dbh.php";
$dbh = DbHandle::get();
// var_dump($dbh);

// SELECT count(*) FROM address_books;

// プリペアドステートメント（準備された文）を作成する
$sql = 'SELECT count(*) as cnt FROM address_books;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
// [memo]今回はバインドする値無し

// SQLを実行する
$r = $pre->execute();
var_dump($r);

// データを取得する
$data = $pre->fetchAll();
var_dump($data);
