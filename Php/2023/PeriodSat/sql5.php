<?php  // sql5.php
declare(strict_types=1);
require_once __DIR__ . "/dbh.php";

$dbh = DbHandle::get();
var_dump($dbh);

/*
SELECT *
  FROM address_books
       LEFT JOIN prefecture_table
         USING(prefecture_code)
 WHERE address_books.prefecture_code = 13
 LIMIT 10 OFFSET 0 
;
 */
// 外から入ってきている想定
$prefecture_code = 13;

// プリペアドステートメント(準備された文)を作成
$sql = '
SELECT *
  FROM address_books
       LEFT JOIN prefecture_table
         USING(prefecture_code)
 WHERE address_books.prefecture_code = :prefecture_code
 LIMIT 10 OFFSET 0 
;';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(":prefecture_code", $prefecture_code, PDO::PARAM_INT);

// SQLを実行
$r = $pre->execute();
var_dump($r);

// 読んできたデータをゲトる
$data = $pre->fetchAll();
var_dump($data);

