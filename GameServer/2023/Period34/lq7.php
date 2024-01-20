<?php // lq7.php
/*
RDBの tech_rdb databaseに接続をします。
(コードは、授業内で作成した dbh.php を使うと良いでしょう)。

prefecture_table テーブルのレコード全件を取得して、var_dump()で出力しなさい。
 */
require_once __DIR__ . "/dbh.php";

$dbh = DbHandle::get();
// var_dump($dbh);

// プリペアドステートメントを作成
$sql = 'SELECT * FROM prefecture_table;';
$pre = $dbh->prepare($sql);

//　値をバインド
// XXX 今回はなし

// 実行
$r = $pre->execute();
// var_dump($r);

// データの取得
$data = $pre->fetchAll();
var_dump($data);
