<?php   // insert_user.php
require_once( __DIR__ . '/dbh.php');

// (外部から)データを取得：$_POSTとか
$name = 'おいちゃん';
$age = 321;
$registry_datetime = date('Y-m-d H:i:s');

// プリペアドステートメント(準備された文)を用意する
$sql = 'INSERT user(name, age, registry_datetime) VALUES(:name, :age, :registry_datetime);';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
$pre->bindValue(':name', $name, PDO::PARAM_STR);
$pre->bindValue(':age', $age, PDO::PARAM_INT);
$pre->bindValue(':registry_datetime', $registry_datetime, PDO::PARAM_STR);

// SQLを実行する
$r = $pre->execute();
var_dump($r);
