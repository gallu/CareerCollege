<?php   // dbh.php
//  https://dev2.m-fr.net/アカウント名/dbh.php
//
$dsn = 'mysql:host=localhost;dbname=tech;charset=utf8mb4';
$user = 'tech';
$pass = 'tech';
$options = [
    \PDO::ATTR_EMULATE_PREPARES => false,  // 静的プレースホルダにする
    \PDO::MYSQL_ATTR_MULTI_STATEMENTS => false, // 複文を禁止する
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, // エラー時に例外を投げる
];
//
try {
    $dbh = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo "Error\n";
    echo $e->getMessage(); // 本来はlogとかに出力する
    exit;
}

var_dump($dbh);
