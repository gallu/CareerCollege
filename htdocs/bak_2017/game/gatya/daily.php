<?php
//daily.php
/*
CREATE TABLE daily (
    user_id varbinary(128),
    gatya_date  date,
    primary key(user_id, gatya_date)
);
CREATE TABLE daily (
    user_id varbinary(128),
    primary key(user_id)
);
// リセット時
DELETE FROM daily;
TRUNCATE TABLE daily; -- こっちのほうが早い
 */

// XXX 本来は外部情報から取得
$user_id = 'furu';

// dailyが引けるか判定
require_once('../db_handle_get.php');
$dbh = db_handle_get();
//var_dump($dbh);

//
$sql = 'INSERT INTO daily(user_id, gatya_date)
   VALUES(:user_id, :gatya_date);';
$pre = $dbh->prepare($sql);
//
$pre->bindValue(':user_id', $user_id);
$pre->bindValue(':gatya_date', date('Y-m-d'));
//
$r = $pre->execute();
//var_dump($r);
//var_dump($pre->errorInfo());
if (true === $r) {
    echo 'dailyがちゃ　引けるよ!';
} else {
    // 「Duplicate entry」確認すると丁寧
    echo 'dailyがちゃ　引けないよ orz';
}

