<?php  declare(strict_types=1); // e04.php
/*
DBの tech_rdb databaseに接続をします。
接続情報は以下の通りです。

サーバ名: localhost
database名: tech_rdb
接続ユーザ名: tech_rdb_u
接続パスワード: tech_rdb_p
(コードは、授業内で作成した dbh.php を使うと良いでしょう)。
*/
require_once __DIR__ . "/dbh.php";
$dbh = DbHandle::get();
var_dump($dbh);

/*
prefecture_table テーブルのレコード全件を取得して、 var_dump() で出力しなさい。
*/
//
// $sql = ;
$pre = $dbh->prepare('SELECT * FROM prefecture_table;');
// XXX
//
$r = $pre->execute();
var_dump($r);

//
// $data = $pre->fetchAll();
// var_dump($data);
while(false !== ($line = $pre->fetch())) {
    var_dump($line);
}

