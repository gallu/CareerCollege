<?php  // sql_insert.php
require_once("./db_handle.php");

$dbh = Db::getHandle();
var_dump($dbh);

/* SQL(INSERT)の発行 */
// プリペアドステートメント(準備された文)の作成
$sql = 'INSERT INTO int_2(num1, num2) VALUES(:num1, :num2);';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(":num1", 123456, PDO::PARAM_INT);
$pre->bindValue(":num2", 987654, PDO::PARAM_INT);

// 実行
$r = $pre->execute();
var_dump($r);
