<?php  // sql1.php
declare(strict_types=1);

require_once __DIR__ . "/dbh.php";

// 外部からのパラメタ(を想定)
$id = "1";

// DBハンドル取得
$dbh = Dbh::getDbh();
// var_dump($dbh);

/* DBにアクセスする */
// なにがあってもどんなことがあっても絶対にぜったいにゼッタイにやっちゃだめ！！ 駄目！！  ダメ！！！
// $sql = "SELECT * FROM items WHERE item_id = {$id};";
// こう書くこと: プリペアドステートメントを作成
$sql = 'SELECT * FROM items WHERE item_id = :item_id ;';
$pre = $dbh->prepare($sql);
// var_dump($pre);

// 名前付きプレースホルダに値をバインド
$pre->bindValue(":item_id", $id);

// SQL文を実行
$r = $pre->execute();
var_dump($r);

// データを取得する
$data = $pre->fetchAll();
var_dump($data);
