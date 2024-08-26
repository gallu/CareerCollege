<?php  // sql2.php

require_once  __DIR__ . "/pdo.php";

// SELECT * FROM items WHERE release_at >= '2020-01-01';

// 外部由来を仮定
$release_at = "2020-01-01";

try {
    // プリペアドステートメント(準備された文)の作成
    $sql = 'SELECT * FROM items WHERE release_at >= :release_at ;';
    $pre = $dbh->prepare($sql);

    // プレースホルダへの値のバインド
    $pre->bindValue(":release_at", $release_at, PDO::PARAM_STR);
    
    // SQLの実行
    $r = $pre->execute();
    var_dump($r);

    //
    while(false !== ($datum = $pre->fetch())) {
        var_dump($datum);
    }
    // while($datum = $pre->fetch()) { // これはダメ
    //
    // while(true) {
        // $datum = $pre->fetch();
        // if (false === $datum) {
            // break;
        // }
        // var_dump($datum);
    // }
} catch (PDOException $e) {
    // 本当はログとかに吐く
    echo $e->getmessage();
    exit;
}
