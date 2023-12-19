<?php  // sql3.php

require_once __DIR__ . "/dbh.php";

$dbh = DbHandle::get();
// var_dump($dbh);

// SELECT  *  FROM  prefecture_table  WHERE  prefecture_code=13;
$prefecture_code = 13; // 外から入ってきたパラメタ、という想定

// プリペアドステートメント（準備された文）を作成する
$sql = 'SELECT * FROM prefecture_table WHERE prefecture_code=:prefecture_code;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
$pre->bindValue(":prefecture_code", $prefecture_code, PDO::PARAM_INT);

// SQLを実行する
$r = $pre->execute();
var_dump($r);

// データを取得する
$data = $pre->fetchAll();
var_dump($data);

