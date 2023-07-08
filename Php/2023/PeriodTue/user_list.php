<?php  // user_list.php

require_once  __DIR__ . "/db.php";

$sql = 'SELECT  *  FROM  users_1  ORDER BY user_id DESC LIMIT 30 OFFSET 0;';
$pre = $dbh->prepare($sql);
// var_dump($pre);

// プレースホルダに値をバインド
// XXX 今回はプレースホルダ無し

// SQLを実行
$r = $pre->execute();
// var_dump($r);

// データを取り込む
$data = $pre->fetchAll();
var_dump($data);
