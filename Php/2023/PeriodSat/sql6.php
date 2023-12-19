<?php  // sql6.php
declare(strict_types=1);
require_once __DIR__ . "/dbh.php";

$dbh = DbHandle::get();
var_dump($dbh);

/*
SELECT prefecture_code
       , count(*)
  FROM address_books
 GROUP BY prefecture_code
;
*/
// プリペアドステートメント(準備された文)を作成
$sql = '
SELECT prefecture_code
       , count(*) as cnt
  FROM address_books
 GROUP BY prefecture_code;
';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
// XXX 今回はなし

// SQLを実行
$r = $pre->execute();
var_dump($r);

// 読んできたデータをゲトる
$data = $pre->fetchAll();
var_dump($data);


