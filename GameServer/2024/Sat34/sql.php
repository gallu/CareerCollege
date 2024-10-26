<?php  // sql.php
declare(strict_types=1);

require_once __DIR__ . "/dbh.php";

$dbh = Db::getDbh();
// var_dump($dbh);

$item_id = 1; // 本当は「外部から取得」のイメージ

// 何があっても絶対にぜったいにゼッタイに本当に死んでも殺しても書いちゃだめ！！！！！！
// $sql = "SELECT * FROM items WHERE item_id = {$item_id};";

// プリペアドステートメントの作成
$sql = 'SELECT * FROM items WHERE item_id = :item_id ;'; // シングルクォート、一本の文字列
$pre = $dbh->prepare($sql);
// var_dump($pre);

// プレースホルダへの値のバインド
$pre->bindValue(":item_id", $item_id);

// SQLの実行
$r = $pre->execute();
var_dump($r);

// データを読み込む
$data = $pre->fetchAll();
var_dump($data);







