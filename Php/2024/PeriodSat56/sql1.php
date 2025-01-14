<?php  // sql1.php
declare(strict_types=1);
require_once __DIR__ . "/dbh.php";

$dbh = Dbh::getDbh();
// var_dump($dbh);

// SELECT * FROM items WHERE item_id = 1;

$item_id = 1; // XXX 外部からの入力を想定

// 死んでも殺しても絶対にぜったいにゼッタイにやっちゃダメ！！ 駄目！！！
// $sql = "SELECT * FROM items WHERE item_id = {$item_id};";
// $dbh->query($sql);

// プリペアド ステートメントの作成
$sql = 'SELECT * FROM items WHERE item_id = :item_id ;';
$pre = $dbh->prepare($sql);
// var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(":item_id", $item_id, PDO::PARAM_INT);

// SQLを実行
$r = $pre->execute();
// var_dump($r);

// データを取得
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
print_r($data);

