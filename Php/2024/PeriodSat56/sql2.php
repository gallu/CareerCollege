<?php  // sql2.php
declare(strict_types=1);
require_once __DIR__ . "/dbh.php";

$dbh = Dbh::getDbh();
// var_dump($dbh);

// SELECT * FROM items WHERE price BETWEEN 500 AND 1000;

$price_min = 500; // XXX 外部からの入力を想定
$price_max = 1000; // XXX 外部からの入力を想定

// プリペアド ステートメントの作成
$sql = 'SELECT * FROM items WHERE price BETWEEN :price_min AND :price_max ;';
$pre = $dbh->prepare($sql);
// var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(":price_max", $price_max, PDO::PARAM_INT);
$pre->bindValue(":price_min", $price_min, PDO::PARAM_INT);

// SQLを実行
$r = $pre->execute();
// var_dump($r);

// データを取得
$data = $pre->fetchAll();
print_r($data);


