<?php   // update_user.php
//
require_once( __DIR__ . '/dbh.php' );

// 値を取得（本来は $_POSTとかから）
$id = 107;
$age = 999;

// プリペアドステートメントを作成
$sql = 'UPDATE user SET age=:age WHERE id=:id ; ';
$pre = $dbh->prepare($sql);
var_dump($pre);

// 値をバインド
$pre->bindValue(':age', $age, PDO::PARAM_INT);
$pre->bindValue(':id', $id, PDO::PARAM_INT);

// SQLを実行
$r = $pre->execute();
var_dump($r);
