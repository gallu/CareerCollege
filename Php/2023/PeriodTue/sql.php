<?php  // sql.php

require_once  __DIR__ . "/db.php";

// プリペアドステートメントを準備
// $sql = 'SELECT  *  FROM  int_1 ;';
$sql = 'SELECT  *  FROM  users_1 ;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
// XXX 今回はプレースホルダ無し

// SQLを実行
$r = $pre->execute();
var_dump($r);

// データを取り込む
// $data = $pre->fetchAll();

$data = [];
while(false !== ($datum = $pre->fetch())) {
// while($datum = $pre->fetch()) {
    $data[] = $datum;
}

var_dump($data);
