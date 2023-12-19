<?php  // sql7.php
declare(strict_types=1);
require_once __DIR__ . "/dbh.php";

$dbh = DbHandle::get();
var_dump($dbh);

// パラメタ
$user_id = 1;
$add_point = 100;

// トランザクション開始
$r = $dbh->beginTransaction();
var_dump($r);

// select
$sql = 'SELECT * FROM users WHERE user_id = :user_id FOR UPDATE;';
$pre = $dbh->prepare($sql);
$pre->bindValue(":user_id", $user_id, PDO::PARAM_INT);
$r = $pre->execute();
// 読んできたデータをゲトる
$datum = $pre->fetch();
var_dump($datum);

// update
$sql = 'UPDATE users SET point = point + :add_point WHERE user_id = :user_id;';
$pre = $dbh->prepare($sql);
$pre->bindValue(":user_id", $user_id, PDO::PARAM_INT);
$pre->bindValue(":add_point", $add_point, PDO::PARAM_INT);
$r = $pre->execute();

// select
$sql = 'SELECT * FROM users WHERE user_id = :user_id FOR UPDATE;';
$pre = $dbh->prepare($sql);
$pre->bindValue(":user_id", $user_id, PDO::PARAM_INT);
$r = $pre->execute();
// 読んできたデータをゲトる
$datum = $pre->fetch();
var_dump($datum);

// rollback
$r = $dbh->rollBack();
var_dump($r);

// select
$sql = 'SELECT * FROM users WHERE user_id = :user_id;';
$pre = $dbh->prepare($sql);
$pre->bindValue(":user_id", $user_id, PDO::PARAM_INT);
$r = $pre->execute();
// 読んできたデータをゲトる
$datum = $pre->fetch();
var_dump($datum);
