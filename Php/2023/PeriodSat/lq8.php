<?php  declare(strict_types=1); // lq8.php
/*
RDBの tech_rdb databaseに接続をします。
(コードは、授業内で作成した dbh.php を使うと良いでしょう)。

prefecture_table テーブルのレコード全件を取得して、var_dump()で出力しなさい。
 */
require_once __DIR__ . "/dbh.php";

$dbh = DbHandle::get();
// var_dump($dbh);

// プリペアドステートメント(準備された文)を作成
$sql = 'SELECT  *  FROM   prefecture_table;';
$pre = $dbh->prepare($sql);
// プレースホルダに値をバインド
// XXX 今回は値なし
// SQLを実行
$r = $pre->execute();
// var_dump($r);

$data = $pre->fetchAll();
var_dump($data);

// while(false !== ($datum = $pre->fetch())) {
    // var_dump($datum);
// }
