<?php  // sql.php
// https://dev2.m-fr.net/アカウント名/sql.php
require_once("./dbh2.php");

$dbh = Dbh::getHandle();
//var_dump($dbh);

/* SQL(SELECT)を実行する */
// プリペアドステートメント(準備された文)を用意する
$sql = 'SELECT * FROM int_2;';
$pre = $dbh->prepare($sql);
//var_dump($pre);

// プレースホルダに値をバインドする
// 今回はプレースホルダがないので処理を省略

// 実行する
$r = $pre->execute();
var_dump($r);

// データを取得
/*
$data = $pre->fetchAll();
var_dump($data[0]);
*/
// whileの判定式の中で「代入」と「比較」をまとめてやっている
while(false !== ($datum = $pre->fetch())) {
    var_dump($datum);
}









