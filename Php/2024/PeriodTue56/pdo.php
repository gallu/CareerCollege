<?php // pdo.php

// ここは本来configとかから取得する
$db_host = "localhost";
$db_name = "ec_sample";
$db_charset = "utf8mb4";
$username = "ec_sample_user";
$password = "ec_sample_pass";

$dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
$options = [
    // セキュリティ上必須
    PDO::ATTR_EMULATE_PREPARES => false,  // エミュレート無効
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,  // 複文無効
    // お好みで
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $dbh = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    // 本当はログとかに吐く
    echo $e->getmessage();
    exit;
}
// var_dump($dbh);

