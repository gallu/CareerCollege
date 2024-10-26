<?php  // sql3.php
declare(strict_types=1);
require_once __DIR__ . "/dbh.php";

$dbh = Db::getDbh();
// var_dump($dbh);

// 外部から取得(イメージ
$category_id = 1;

// プリペアドステートメントの作成
$sql = 'SELECT * FROM items WHERE category_id = :category_id ;'; // シングルクォート、一本の文字列
$pre = $dbh->prepare($sql);
// var_dump($pre);

// プレースホルダへの値のバインド
$pre->bindValue(":category_id", $category_id);

// SQLの実行
$r = $pre->execute();
// var_dump($r);

// データを読み込む
// $data = $pre->fetchAll();
// var_dump($data);

// 主にバッチとか用
// while($datum = $pre->fetch()) { // やめとけ
while(false !== ($datum = $pre->fetch())) {
    var_dump($datum);
    echo "<br> \n";
}


