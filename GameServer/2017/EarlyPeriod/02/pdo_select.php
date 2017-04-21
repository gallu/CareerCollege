<?php

include('./pdo.php');
var_dump($dbh);

// 「準備されたSQL文」を用意
$sql = 'SELECT * FROM multi_table WHERE str = :str;';
$pre = $dbh->prepare($sql);

// 値を紐づける
$pre->bindValue(':str', 'hogehoge');

// SQL文を発行する
$r = $pre->execute();
if (false === $r) {
    // エラーが発生したので表示
    var_dump($pre->errorInfo());
    return;
}

// データを取得する
$data = array();
while($row = $pre->fetch(PDO::FETCH_ASSOC)) {
  $data[] = $row;
}
var_dump($data);

//
if (empty($data)) {
    echo 'IDに対応するデータがありません';
    return;
}

