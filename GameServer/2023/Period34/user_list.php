<?php  // user_list.php
declare(strict_types=1);

require_once  __DIR__ . "/db.php";

// プリペアドステートメントの作成
$sql = 'SELECT * FROM users_1 ORDER BY user_id DESC LIMIT 20 OFFSET 0;';
$pre = $dbh->prepare($sql);
// var_dump($pre);

// 値をバインド
// XXX 今回はなし

// SQLを実行
$r = $pre->execute();
// var_dump($r);

$data = $pre->fetchAll();
var_dump($data);
