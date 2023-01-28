<?php  // pdo.php
// http://dev2.m-fr.net/XXXXX/pdo.php

// 接続情報の作成
$user = 'tech';
$pass = 'tech';
$database = 'tech';
$host = 'localhost';
//
$dsn = "mysql:host={$host};dbname={$database};charset=utf8mb4";
//var_dump($dsn);
$options = [
    PDO::ATTR_EMULATE_PREPARES => false,  // 静的プレースホルダにする
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false, // 複文を禁止する
    //PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // SQLのエラーを例外で処理する
];

//
try {
    $dbh = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo "DB接続エラー \n";
    echo $e->getMessage();
    exit;
}

//var_dump($dbh);
