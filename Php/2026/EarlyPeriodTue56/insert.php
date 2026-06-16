<?php // insert.php
declare(strict_types=1);

// DBハンドルの取得
require_once __DIR__. '/dbh.php';
$dbh = Dbh::getDbh();
// var_dump($dbh);

// 
$item_name = 'ハイソ紅茶';
$category_id = 2;
$price = 980;
$release_at = '2026-04-01 00:00:00';
$sale_end_at = '2027-03-31 23:59:59';

// プリペアド ステートメント(準備された文)を用意する
$sql = 'INSERT INTO items(item_name, category_id, price, release_at, sale_end_at)
  VALUES(:item_name, :category_id, :price, :release_at, :sale_end_at);';
$pre = $dbh->prepare($sql);

// プレースホルダに値をバインドする
$pre->bindValue(':item_name', $item_name, PDO::PARAM_STR);
$pre->bindValue(':category_id', $category_id, PDO::PARAM_INT);
$pre->bindValue(':price', $price, PDO::PARAM_INT);
$pre->bindValue(':release_at', $release_at, PDO::PARAM_STR);
$pre->bindValue(':sale_end_at', $sale_end_at, PDO::PARAM_STR);

// 実行する
$r = $pre->execute();
var_dump($r);

