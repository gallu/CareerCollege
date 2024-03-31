<?php  declare(strict_types=1); // e05.php
// formからの都道府県コードの取得
$prefecture_code = $_POST["prefecture_code"] ?? "";

// DBに接続
require_once __DIR__ . "/dbh.php";
$dbh = DbHandle::get();
// var_dump($dbh);

// SQL発行
$sql = 'SELECT * FROM prefecture_table WHERE prefecture_code = :prefecture_code ;';
$pre = $dbh->prepare($sql);
//
$pre->bindValue(":prefecture_code", $prefecture_code, PDO::PARAM_INT);
//
$r = $pre->execute();
var_dump($r);

// 結果
$data = $pre->fetchAll();
var_dump($data);

// $data = $pre->fetch();
// var_dump($data);
