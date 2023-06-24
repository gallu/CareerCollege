<?php  // sql1.php

require_once __DIR__ . "/db.php";

try {
    // プリペアドステートメント(準備された文)を作成
    $sql = 'SELECT  *  FROM  int_1 ;';
    $pre = $dbh->prepare($sql);
// var_dump($pre);

    // プレースホルダに値をバインド
    // XXX 今回は入れる値なし

    // SQLを実行
    $r = $pre->execute();
var_dump($r);

    // 読んできたデータをゲトる
/*
    $data = $pre->fetchAll();
var_dump($data);
*/
    // 1行づつ取る時のやりかた
    $data = [];
    while(false !== ($datum = $pre->fetch())) {
    // while($datum = $pre->fetch()) {
        $data[] = $datum;
    }
var_dump($data);

} catch(PDOException $e) {
    echo "into catch <br>\n";
    echo $e->getMessage();
    return ;
}