<?php   // update_user.php
require_once( __DIR__ . '/db.php' );

// 外からの値を取得
// XXX 本当は、$_POSTから、とか
$age = 999;
$id = 2;

// プリペアドステートメント(準備された文)を用意
$sql = 'UPDATE user SET age=:age WHERE id=:id;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(':age', $age);
$pre->bindValue(':id', $id);

// SQLを実行
$r = $pre->execute();
var_dump($r);

