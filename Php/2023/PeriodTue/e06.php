<?php  declare(strict_types=1); // e06.php
// formからの都道府県コードの取得
$prefecture_code = $_POST["prefecture_code"] ?? "";

// DBに接続
require_once __DIR__ . "/dbh.php";
$dbh = DbHandle::get();
// var_dump($dbh);

// SQL発行
$sql = '
SELECT *
  FROM address_books 
       LEFT JOIN prefecture_table
              -- ON prefecture_table.prefecture_code = address_books.prefecture_code
              USING(prefecture_code)
 WHERE address_books.prefecture_code = :prefecture_code
 ORDER BY birthday
 LIMIT :limit OFFSET :offset
';
$pre = $dbh->prepare($sql);
//
$pre->bindValue(":prefecture_code", $prefecture_code, PDO::PARAM_INT);
$pre->bindValue(":limit", 20, PDO::PARAM_INT);
$pre->bindValue(":offset", 0, PDO::PARAM_INT);
//
$r = $pre->execute();
var_dump($r);

// 結果
$data = $pre->fetchAll();
var_dump($data);

