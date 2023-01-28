<?php   // select_user.php
require_once( __DIR__ . '/dbh.php');

// プリペアドステートメント(準備された文)を用意する
$sql = 'SELECT  *  FROM  user ;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
// XXX 今回はなし

// SQLを実行する
$r = $pre->execute();
var_dump($r);

// データを取得
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);
