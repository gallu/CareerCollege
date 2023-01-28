<?php   // select.php
//  https://dev2.m-fr.net/アカウント名/select.php

require_once( __DIR__ . '/dbh.php' );

// プリペアドステートメント(準備された文)を用意
$sql = 'SELECT  *  FROM  int_2 ;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
// XXX 今回はなし

// SQLを実行
$r = $pre->execute();
var_dump($r);

// データを取得
/*
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);
*/
// fetch版
$data = [];
while(false !== ($datum = $pre->fetch(PDO::FETCH_ASSOC))) {
    $data[] = $datum;
}
var_dump($data);










