<?php   // update_user.php
//
require_once( __DIR__ . '/dbh.php' );

// データが入ってくる想定
$id = 11;
$age = 999;

// プリペアドステートメント(準備された文)を用意
$sql = 'UPDATE user SET age=:age WHERE id=:id;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(':id', $id);
$pre->bindValue(':age', $age);

// SQLを実行
$r = $pre->execute();
var_dump($r);
