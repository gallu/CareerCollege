<?php  // sql3.php
declare(strict_types=1);

require_once   __DIR__ . '/dbh.php';

$dbh = Dbh::getDbh();

// プリペアドステートメントを用意する
$sql = 'SELECT  *  FROM  items ;';
$pre = $dbh->prepare($sql);
// var_dump($pre);

// プレイスホルダーに値をバインドする
// [NOTE]プレイスホルダーがないのでバインドは省略

// SQLを実行する
$r = $pre->execute();
// var_dump($r);

// (バッチとかで)大量のデータを扱う時用のデータの取得
// while($datum = $pre->fetch()) { // バグの元
while(false !== ($datum = $pre->fetch())) {
    var_dump($datum);
}
