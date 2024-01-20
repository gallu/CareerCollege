<?php  // lq10.php
/*
RDBの tech_rdb databaseに接続をします。
(コードは、授業内で作成した dbh.php を使うと良いでしょう)。

prefecture_table テーブルのレコード全件を取得して、var_dump()で出力しなさい。
 */
require_once __DIR__ . "/dbh.php";

$dbh = DbHandle::get();
var_dump($dbh);

//
$sql = 'SELECT * FROM prefecture_table;';
$pre = $dbh->prepare($sql);
// XXX バインドは今回はなし
//
$r = $pre->execute();
var_dump($r);

$data = $pre->fetchAll();
var_dump($data);
