<?php  // db.php

$dbname = "tech";
$host = "localhost";
$username = "tech";
$password = "tech";

$dsn = "mysql:dbname={$dbname};host={$host};charset=utf8mb4";
$options = [
    // 必須
    PDO::ATTR_EMULATE_PREPARES => false,  // エミュレート無効
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,  // 複文無効
    // お好み
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // カラム名だけの配列にする
];

try {
    $dbh = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
    echo "into catch <br>\n";
    echo $e->getMessage();
    return ;
}

// var_dump($dbh);
