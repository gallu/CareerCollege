<?php  // db.php

$host = "localhost";
$dbname = "tech";
$user = "tech";
$pass = "tech";

$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8mb4";
$options = [
    // 必須
    PDO::ATTR_EMULATE_PREPARES => false,  // 静的プレースホルダにする
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false, // 複文を禁止する
    // お好み
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $dbh = new PDO($dsn, $user, $pass, $options);
} catch(PDOException $e) {
    echo "into catch <br> \n";
    echo $e->getMessage();
    exit;
}

// var_dump($dbh);
