<?php  // pdo.php
declare(strict_types=1);

// echo "pdo";
// $dsn = "mysql:dbname=ec_sample;host=localhost"; // こっちはダメ
$dsn = "mysql:dbname=ec_sample;host=localhost;charset=utf8mb4";
$user = "ec_sample_user";
$pass = "ec_sample_pass";
$options = [
    // セキュリティ上必須
    PDO::ATTR_EMULATE_PREPARES => false,  // エミュレート無効
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,  // 複文無効
];

$dbh = new PDO($dsn, $user, $pass, $options);
var_dump($dbh);
