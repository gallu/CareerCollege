<?php

include('./pdo.php');
var_dump($dbh);

// 「準備されたSQL文」を用意
$sql = 'insert into multi_table(num, str, cal) values(:num, :str, :cal);';
$pre = $dbh->prepare($sql);

// 値を紐づける
$pre->bindValue(':num', mt_rand(-2147483648, 2147483647), PDO::PARAM_INT);
$pre->bindValue(':str', 'hogehoge');
$pre->bindValue(':cal', date('Y-m-d H:i:s'));

// SQL文を発行する
$r = $pre->execute();
if (false === $r) {
    // エラーが発生したので表示
    var_dump($pre->errorInfo());
    return;
}

