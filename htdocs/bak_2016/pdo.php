<?php
// pdo.php
// DBに接続
$user = 'furu';
$pass = 'furu';
$dsn = 'mysql:dbname=furu;host=localhost;charset=utf8mb4';
//
try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "connect error!! (" , $e->getMessage() , ")";
    return ;
}
// 静的プレースホルダを指定
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//
var_dump($dbh);