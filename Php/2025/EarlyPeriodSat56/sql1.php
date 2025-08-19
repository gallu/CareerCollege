<?php  // sql1.php
declare(strict_types=1);

require_once   __DIR__ . '/dbh.php';

$dbh = Dbh::getDbh();
// var_dump($dbh);

// GETとかから入ってきたと仮定
$item_id = "2";

// XXX これは！ 絶対に書いちゃだめ！！！！！
// $sql = "SELECT  *  FROM  items  WHERE  item_id={$item_id};";
// プリペアドステートメントを用意する
$sql = 'SELECT  *  FROM  items  WHERE  item_id = :item_id ;';
$pre = $dbh->prepare($sql);
// var_dump($pre);

// プレイスホルダーに値をバインドする
$pre->bindValue(':item_id', $item_id);
// $pre->bindValue(':item_id', (int)$item_id, PDO::PARAM_INT);

// SQLを実行する
$r = $pre->execute();
// var_dump($r);

// データを取得する
$datum = $pre->fetch();
var_dump($datum);

