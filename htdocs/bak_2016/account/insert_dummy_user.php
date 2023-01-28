<?php
/*
 * insert_dummy_user.php
 */

// 動きを止める
exit;

// DBに接続
require_once('db.php');

// ダミーユーザをinsert
$sql = 'INSERT INTO users(user_id, password, memo)
          VALUES(:user_id, :password, :memo);';
$pre = $dbh->prepare($sql);

//
$pre->bindValue(':user_id', 'furu');
$pre->bindValue(':password', '$2y$10$nNZYbyfzGCrp/Ndmh9aFtO7O01ruV7PYt2fsExQBWv9znupsiMjma');
$pre->bindValue(':memo', 'ダミーユーザ');

//
$r = $pre->execute();
var_dump($r);
