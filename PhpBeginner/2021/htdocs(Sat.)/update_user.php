<?php   // update_user.php
require_once( __DIR__ . '/dbh.php');

// (外部から)データを取得：$_POSTとか
$id = nnn;
$age = nnn;

// プリペアドステートメント(準備された文)を用意する
$sql = 'UPDATE user SET age=:age WHERE id=:id;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
$pre->bindValue(':id', $id, PDO::PARAM_INT);
$pre->bindValue(':age', $age, PDO::PARAM_INT);

// SQLを実行する
$r = $pre->execute();
var_dump($r);
