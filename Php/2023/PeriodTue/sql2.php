<?php  // sql2.php

require_once  __DIR__ . "/db.php";

// 外部データ(という想定)
// $user_id = $_GET["id"];
$user_id = "4";

// プリペアドステートメントを準備
$sql = 'SELECT  *  FROM  users_1 WHERE user_id = :user_id ;'; // シングルクォート一本の文字列
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(":user_id", $user_id);

// SQLを実行
$r = $pre->execute();
var_dump($r);

// データを取り込む
$data = $pre->fetchAll();
var_dump($data);
