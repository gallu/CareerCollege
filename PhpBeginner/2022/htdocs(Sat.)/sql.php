<?php   // sql.php
require_once("./db_handle.php");

$dbh = Db::getHandle();
//var_dump($dbh);

/* SQL(SELECT)の発行 */
// プリペアドステートメント(準備された文)の作成
$sql = 'SELECT * FROM int_2;';
$pre = $dbh->prepare($sql);
//var_dump($pre);

// プレースホルダに値をバインド
// 今回はバインドする値がないので処理なし

// 実行
$r = $pre->execute();
//var_dump($r);

// データを取得
/*
$data = $pre->fetchAll();
var_dump($data[0]);
*/
// 「代入」と「判定」を一行で行っている
while(false !== ($datum = $pre->fetch())) {
    var_dump($datum);
}
