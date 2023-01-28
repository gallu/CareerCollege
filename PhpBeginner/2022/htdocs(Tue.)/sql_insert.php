<?php  // sql_insert.php
// https://dev2.m-fr.net/アカウント名/sql_insert.php
require_once("./dbh2.php");

$dbh = Dbh::getHandle();
var_dump($dbh);

/* SQL(INSERT)を実行する */
// プリペアドステートメント(準備された文)を用意する
$sql = 'INSERT INTO int_2(num1, num2) VALUES(:num1, :num2);';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
$pre->bindValue(":num1", 123456, PDO::PARAM_INT);
$pre->bindValue(":num2", 987654, PDO::PARAM_INT);

// 実行する
$r = $pre->execute();
var_dump($r);