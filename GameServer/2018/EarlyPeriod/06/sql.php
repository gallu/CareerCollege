<?php  // sql.php
//
require_once('pdo.php');

// INSERT
$num = 100;
$string = " '); DELETE FROM php_test;-- ";
/*
// XXX 危ないから絶対にやるな！！！！！
// SQLの作成
$sql = "INSERT INTO php_test(num, string) VALUES({$num}, '{$string}');";
var_dump($sql);
// クエリの発行
$dbh->query($sql);
var_dump($dbh->errorinfo());
*/

// 準備された文(プリペアドステートメント)の作成
$sql = 'INSERT INTO php_test(num, string)
          VALUES(:num, :string);';
$pre = $dbh->prepare($sql);

// プレースホルダへの値のbind
$pre->bindValue(':num'   , $num   , PDO::PARAM_INT);
$pre->bindValue(':string', $string, PDO::PARAM_STR);

// SQLの実行
$r = $pre->execute();

// SELECT
// 準備された文(プリペアドステートメント)の作成
$sql = "SELECT * FROM php_test;";
$pre = $dbh->prepare($sql);

// プレースホルダへの値のbind
// XXX 今回は値なし

// クエリの発行
$res = $pre->execute();

// データの取得
while($row = $pre->fetch()) {
    var_dump($row);
}
