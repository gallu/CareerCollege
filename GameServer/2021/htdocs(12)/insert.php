<?php   // insert.php
//
require_once( __DIR__ . '/dbh.php' );

// プリペアドステートメント(準備された文)を用意
$sql = 'INSERT INTO int_2(num1, num2) VALUES(:num1, :num2);';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(':num1', 12345678, PDO::PARAM_INT);
$pre->bindValue(':num2', -90123456, PDO::PARAM_INT);

// SQLを実行
$r = $pre->execute();
var_dump($r);


