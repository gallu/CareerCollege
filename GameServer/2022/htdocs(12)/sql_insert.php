<?php  // sql_insert.php
require_once("./db_handle.php");

// DBハンドルの取得
$dbh = Db::getHandle();
//var_dump($dbh);

/* SQL(SELECT)の発行 */
// プリペアドステートメント(準備された文)を作成
$sql = 'INSERT INTO int_2(num1, num2) VALUES(:num1, :num2);' ;
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(":num1", 1234, PDO::PARAM_INT);
$pre->bindValue(":num2", 9876, PDO::PARAM_INT);

// 実行
$r = $pre->execute();
var_dump($r);
