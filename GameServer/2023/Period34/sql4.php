<?php  // sql4.php

require_once __DIR__ . "/dbh.php";

$dbh = DbHandle::get();
// var_dump($dbh);

// SELECT  *  FROM  prefecture_table  WHERE  prefecture_name LIKE '%都%';
$prefecture_name = "都"; // 外から入ってきたパラメタ、という想定
$prefecture_name = "都%"; // XXX これをエスケープするか？は個々にご相談

//　エスケープ処理
$prefecture_name = str_replace(['%', '_'], ['\\%', '\\_'],$prefecture_name);
var_dump($prefecture_name);

// プリペアドステートメント（準備された文）を作成する
$sql = 'SELECT * FROM prefecture_table WHERE prefecture_name LIKE :prefecture_name ;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
$pre->bindValue(":prefecture_name", "%{$prefecture_name}", PDO::PARAM_STR);

// SQLを実行する
$r = $pre->execute();
var_dump($r);

// データを取得する
$data = $pre->fetchAll();
var_dump($data);

