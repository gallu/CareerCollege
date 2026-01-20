<?php  // sql2.php
declare(strict_types=1);

require_once __DIR__ . "/dbh.php";

// DBハンドル取得
$dbh = Dbh::getDbh();
// var_dump($dbh);

/* DBにアクセスする */
// プリペアドステートメントを作成
$sql = 'SELECT * FROM items ;';
$pre = $dbh->prepare($sql);
// var_dump($pre);

// 名前付きプレースホルダに値をバインド
// [memo]今回は無し

// SQL文を実行
$r = $pre->execute();
var_dump($r);

// 逐次取得
// while($datum = $pre->fetch()) { // やめといたほうがいい
while(false !== ($datum = $pre->fetch())) {
    var_dump($datum);
}

