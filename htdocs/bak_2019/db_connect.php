<?php  // db_connect.php
// http://dev2.m-fr.net/XXXX/db_connect.php

//
$host = 'localhost';
$database = 'tech';
$user = 'tech';
$pass = 'tech';
//
$dsn = "mysql:dbname={$database};host={$host};charset=utf8mb4";

//
$opt = [
    // 静的プレースホルダを指定
    \PDO::ATTR_EMULATE_PREPARES => false,
    // マルチクエリの実行を無効
    \PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
];

// 接続
try {
    $dbh = new \PDO($dsn, $user, $pass, $opt);
} catch (\PDOException $e) {
    // XXX 実際にはもうちょっと隠蔽したりlogファイルに書いたりする
    echo 'DB Connect error: ', $e->getMessage();
    exit;
}
//var_dump($dbh);

