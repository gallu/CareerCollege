<?php // pdo.php
// XXX 本来はconfigファイルとかに書いてある
$dsn  = 'mysql:dbname=furu;host=localhost;charset=utf8mb4';
$user = 'furu';
$pass = 'furu';
// MySQL固有の設定
$opt = [
    // 静的プレースホルダを指定
    PDO::ATTR_EMULATE_PREPARES => false,
];
//
try {
    $dbh = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
    echo 'DB Connect error: ', $e->getMessage();
    exit;
}
//
var_dump($dbh);
