<?php   // sql.php

// DBハンドルを取得
require_once('./db.php');

// 準備された文(プリペアドステートメント)を作成する
$sql = 'SELECT  *  FROM  dq3;';

//var_dump($sql);
$pre = $dbh->prepare($sql);
//var_dump($pre);

// プレースホルダに値をバインドする
// XXX 今回はプレースホルダなし

// 実行する
$r = $pre->execute();
//var_dump($r);
// データを取得する
$data = $pre->fetchAll();
//var_dump($data);

// -----------------------------------------
// 「外から入ってきた変数」の想定
$gold = 100000;

// 準備された文(プリペアドステートメント)を作成する
$sql = 'SELECT  *  FROM  dq3  WHERE  gold >= :gold ;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
$pre->bindValue(':gold', $gold);

// 実行する
$r = $pre->execute();
//var_dump($r);
// データを取得する
$data = $pre->fetchAll();
var_dump($data);


