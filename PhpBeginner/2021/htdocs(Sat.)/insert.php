<?php   // insert.php
require_once( __DIR__ . '/dbh.php');

// プリペアドステートメント(準備された文)を用意する
$sql = 'INSERT INTO int_2(num1, num2) VALUES(:num1, :num2);';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
$pre->bindValue(':num1', nnnn, PDO::PARAM_INT);
$pre->bindValue(':num2', nnnn, PDO::PARAM_INT);

// SQLを実行する
$r = $pre->execute();
var_dump($r);
