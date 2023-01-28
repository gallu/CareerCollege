<?php  // sql.php
require_once("./db_handle.php");

// DBハンドルの取得
$dbh = Db::getHandle();
//var_dump($dbh);

/* SQL(SELECT)の発行 */
// プリペアドステートメント(準備された文)を作成
$sql = 'SELECT * FROM int_2;' ;
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
// XXX 今回はプレースホルダがないので、処理なし

// 実行
$r = $pre->execute();
var_dump($r);

// データを取得する
/*
$data = $pre->fetchAll();
var_dump($data);
*/
// while文の中で代入をやっている
while(false !== ($datum = $pre->fetch())) {
    var_dump($datum);
}
