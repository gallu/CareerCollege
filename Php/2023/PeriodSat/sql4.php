<?php  // sql4.php
declare(strict_types=1);
require_once __DIR__ . "/dbh.php";

$dbh = DbHandle::get();
var_dump($dbh);

// SELECT * FROM prefecture_table WHERE prefecture_name LIKE '%都';

// 外から入ってきている想定
$prefecture_name = "都";
$prefecture_name = "都%"; // エスケープするかしないかはわりと状況次第

// プリペアドステートメント(準備された文)を作成
$sql = 'SELECT * FROM prefecture_table WHERE prefecture_name LIKE :prefecture_name;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(":prefecture_name", "%{$prefecture_name}", PDO::PARAM_STR);

// SQLを実行
$r = $pre->execute();
var_dump($r);

// 読んできたデータをゲトる
$data = $pre->fetchAll();
var_dump($data);

