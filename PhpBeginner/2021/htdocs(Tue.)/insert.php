<?php   // insert.php
require_once( __DIR__ . '/db.php' );

// 外からの値を取得
// XXX 本当は、$_POSTから、とか
$num1 = 123456;
$num2 = 789123;

// プリペアドステートメント(準備された文)を用意
$sql = 'INSERT INTO int_2(num1, num2) VALUES( :num1 , :num2 );';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(':num1', $num1);
$pre->bindValue(':num2', $num2);

// SQLを実行
$r = $pre->execute();
var_dump($r);

