<?php   // select.php
// https://dev2.m-fr.net/アカウント名/select.php
require_once( __DIR__ . '/dbh.php');

// プリペアドステートメント(準備された文)を用意する
$sql = 'SELECT  *  FROM  int_2 ;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
// XXX 今回はなし

// SQLを実行する
$r = $pre->execute();
var_dump($r);

// データを取得
/*
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);
*/
// fetchの場合
$data = [];
while(false !== ($datum = $pre->fetch(PDO::FETCH_ASSOC))) {
    $data[] = $datum;
}
var_dump($data);











