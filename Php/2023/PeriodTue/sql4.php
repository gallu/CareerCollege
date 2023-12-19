<?php  // sql4.php
require_once __DIR__ . '/dbh.php';

$dbh = DbHandle::get();

// 「外から入ってきた情報」の想定
$name = "都";
$name = "都%";
// $name = "%";

// エスケープするんならこれを追加
$name = str_replace(['%', '_'], ['\\%', '\\_'] ,$name);
var_dump($name);

// プリペアドステートメント(準備された文)を作成
$sql = 'SELECT * FROM prefecture_table WHERE prefecture_name LIKE :prefecture_name;';
$pre = $dbh->prepare($sql);
// var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(":prefecture_name", "%{$name}", PDO::PARAM_STR);

// SQLを実行
$r = $pre->execute();
var_dump($r);

// データを取り込む
$data = $pre->fetchAll();
var_dump($data);
