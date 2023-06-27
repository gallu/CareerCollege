<?php  // sql.php

require_once  __DIR__ . "/db.php";

// プリペアドステートメント（準備された文）を作成する
$sql = 'SELECT * FROM int_1;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
// XXX 今回はプレースホルダ無し

// SQLを実行する
$r = $pre->execute();
var_dump($r);

// データを取得する
// $data = $pre->fetchAll();

// １レコードづつ取る場合
$data = [];
while(false !== ($datum = $pre->fetch())) {
// while($datum = $pre->fetch()) {
    $data[] = $datum;
}

var_dump($data);







