<?php  // sql.php
require_once("./db_handle.php");

$dbh = Db::getHandle();
//var_dump($dbh);

/* SQL（SELECT）を発行 */
// プリペアドステートメント(準備された文)を用意する
$sql = 'SELECT * FROM int_2;';
$pre = $dbh->prepare($sql);
//var_dump($pre);

// プレースホルダに値をバインド
// 今回はプレースホルダがないので処理無し

// 実行
$r = $pre->execute();
//var_dump($r);

// データを取得
/*
$data = $pre->fetchAll();
var_dump($data[0]);
*/
// whileの中で「代入してから、その値を評価」している
while(false !== ($datum = $pre->fetch())) {
    var_dump($datum);
}