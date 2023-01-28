<?php   // insert_user.php
require_once( __DIR__ . '/db.php' );

// 外からの値を取得
// XXX 本当は、$_POSTから、とか
$name = 'おいちゃん';
$age = 123;
$registry_datetime = date('Y-m-d H:i:s');

// プリペアドステートメント(準備された文)を用意
$sql = 'INSERT INTO user(name, age, registry_datetime) VALUES( :name, :age, :registry_datetime );';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(':name', $name);
$pre->bindValue(':age', $age);
$pre->bindValue(':registry_datetime', $registry_datetime);

// SQLを実行
$r = $pre->execute();
var_dump($r);

