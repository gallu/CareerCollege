<?php   // insert_user.php
//
require_once( __DIR__ . '/dbh.php' );

// 値を取得（本来は $_POSTとかから）
$name = 'おいちゃん';
$age = 123;
$registry_datetime = date('Y-m-d H:i:s');

// プリペアドステートメントを用意
$sql = 'INSERT INTO user(name, age, registry_datetime) VALUES(:name, :age, :registry_datetime);';
$pre = $dbh->prepare($sql);
var_dump($pre);

// 値をバインド
$pre->bindValue(':name', $name, PDO::PARAM_STR);
$pre->bindValue(':age', $age, PDO::PARAM_INT);
$pre->bindValue(':registry_datetime', $registry_datetime, PDO::PARAM_STR);

// SQLを実行
$r = $pre->execute();
var_dump($r);