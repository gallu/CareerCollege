<?php  // db.php

$host = "localhost";
$dbname = "tech";
$user = "tech";
$pass = "tech";

$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8mb4";
$options = [
    // 必須
    PDO::ATTR_EMULATE_PREPARES => false,  // エミュレート無効
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,  // 複文無効
    // お好み
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $dbh = new PDO($dsn, $user, $pass, $options);
} catch(PDOException $e) {
    echo "into catch <br> \n";
    echo $e->getMessage();
    return;
}

// var_dump($dbh);
