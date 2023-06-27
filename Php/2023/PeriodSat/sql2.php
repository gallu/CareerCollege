<?php  // sql2.php

require_once __DIR__ . "/db.php";


// $input =  $_GET["num"];
$input = "100";

try {
    // プリペアドステートメント(準備された文)を作成
    $sql = 'SELECT  *  FROM  int_1  WHERE num = :num ;';
    $pre = $dbh->prepare($sql);
// var_dump($pre);

    // プレースホルダに値をバインド
    $pre->bindValue(":num", $input);

    // SQLを実行
    $r = $pre->execute();
var_dump($r);

    // 読んできたデータをゲトる
    $data = $pre->fetchAll();
var_dump($data);
} catch(PDOException $e) {
    echo "into catch <br>\n";
    echo $e->getMessage();
    return ;
}
