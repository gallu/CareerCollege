<?php  // sql1.php

require_once __DIR__ . "/DBConnection.php";

$dbh = DBConnection::getHndle();
var_dump($dbh);

$item_id = 10001;
// $sql = "SELECT * FROM items_v1 WHERE id = {$item_id};"; // 絶対だめ！！！
// プリペアドステートメント(準備された文)を作成
$sql = 'SELECT * FROM items_v1 WHERE id = :item_id ;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(":item_id", $item_id, PDO::PARAM_INT);

// SQLを実行
$r = $pre->execute();
var_dump($r);

// データをまとめて読み込む
// $data = $pre->fetchAll();
// var_dump($data);

// 1件のみ、なら、こっちでも
$datum = $pre->fetch();
var_dump($datum);

