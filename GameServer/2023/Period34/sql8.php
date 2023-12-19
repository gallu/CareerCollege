<?php  // sql8.php
require_once __DIR__ . "/dbh.php";
$dbh = DbHandle::get();
//
$user_id = 1;
$cost = 100;

// トランザクション開始
$dbh->beginTransaction();

// select
$sql = 'SELECT * FROM users WHERE user_id=:user_id FOR UPDATE;';
$pre = $dbh->prepare($sql);
$pre->bindValue(":user_id", $user_id, PDO::PARAM_INT);
$r = $pre->execute();
$user = $pre->fetch();
var_dump($user);

// 
$sql = 'UPDATE users SET point=point-:cost WHERE user_id=:user_id;';
$pre = $dbh->prepare($sql);
$pre->bindValue(":user_id", $user_id, PDO::PARAM_INT);
$pre->bindValue(":cost", $cost, PDO::PARAM_INT);
$r = $pre->execute();
var_dump($r);

// select
$sql = 'SELECT * FROM users WHERE user_id=:user_id FOR UPDATE;';
$pre = $dbh->prepare($sql);
$pre->bindValue(":user_id", $user_id, PDO::PARAM_INT);
$r = $pre->execute();
$user = $pre->fetch();
var_dump($user);

//
$dbh->rollBack();
// $dbh->commit();
