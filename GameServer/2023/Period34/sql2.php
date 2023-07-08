<?php  // sql2.php

require_once  __DIR__ . "/db.php";

$input = "100";
$input = "100 OR 1 = 1";

// プリペアドステートメント（準備された文）を作成する
$sql = 'SELECT * FROM int_1 WHERE num = :num ;'; // シングルクォートで１本の文字列
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
$pre->bindValue(":num", $input);

// SQLを実行する
$r = $pre->execute();
var_dump($r);

// データを取得する
$data = $pre->fetchAll();
var_dump($data);
