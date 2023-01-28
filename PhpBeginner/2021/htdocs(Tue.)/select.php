<?php   // select.php
require_once( __DIR__ . '/db.php' );

// プリペアドステートメント(準備された文)を用意
$sql = 'SELECT * FROM int_2;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
// XXX 今回はなし

// SQLを実行
$r = $pre->execute();
var_dump($r);

// データを全件取得
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);
