<?php   // db.php
//  http://dev2.m-fr.net/アカウント名/db.php

$user = 'tech';
$pass = 'tech';
$host = 'localhost';
$dbname = 'tech';
$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8mb4";
$options = [
    PDO::ATTR_EMULATE_PREPARES => false,  // 静的プレースホルダにする
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false, // 複文を禁止する
];
//
try {
    $dbh = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    // XXX 本当はログにでも書く
    echo 'error: ' , $e->getMessage();
    exit;
}

var_dump($dbh);
