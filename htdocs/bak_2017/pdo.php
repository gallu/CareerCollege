<?php

// DBに接続
$user = 'tech';
$pass = 'tech';
$dsn = 'mysql:dbname=tech;host=localhost;charset=utf8mb4';

// 接続オプションの設定
$opt = array (
    // 静的プレースホルダを指定
    PDO::ATTR_EMULATE_PREPARES => false,
);
// 「複文禁止」が可能なら付け足しておく
if (defined('PDO::MYSQL_ATTR_MULTI_STATEMENTS')) {
    $opt[PDO::MYSQL_ATTR_MULTI_STATEMENTS] = false;
}

//
try {
    $dbh = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
    echo "connect error!! (" , $e->getMessage() , ")";
    return ;
}
//
var_dump($dbh);
