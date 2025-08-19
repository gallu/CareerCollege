<?php  // sql2.php
declare(strict_types=1);

require_once   __DIR__ . '/dbh.php';

$dbh = Dbh::getDbh();

// SELECT  *  FROM  items  WHERE  price >= 500;
$min_price = "500";

// プリペアドステートメントを用意する
$sql = 'SELECT  *  FROM  items  WHERE  price >= :price ;';
$pre = $dbh->prepare($sql);
// var_dump($pre);

// プレイスホルダーに値をバインドする
$pre->bindValue(':price', $min_price);

// SQLを実行する
$r = $pre->execute();
var_dump($r);

// データを取得する
$data = $pre->fetchAll();
var_dump($data);

