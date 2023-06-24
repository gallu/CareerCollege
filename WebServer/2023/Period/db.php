<?php  // db.php
declare(strict_types=1);

//　接続用情報
$host = 'localhost';
$dbname = 'tech';
$charset = 'utf8mb4';
$user = 'tech';
$pass = 'tech';

// 接続
$dsn = "mysql:host={$host};dbname={$dbname};charset={$charset}";
$options = [
    \PDO::ATTR_EMULATE_PREPARES => false,  // エミュレート無効
    \PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,  // 複文無効
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,  // エラー時に例外を投げる(好み)
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
];
//
try {
    $dbh = new \PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e){
    echo $e->getMessage(); // XXX 実際は出力はしない(logに書くとか)
    exit;
}

// var_dump($dbh);

