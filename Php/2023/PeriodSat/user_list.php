<?php  // user_list.php

require_once __DIR__ . "/db.php";

try {
    // プリペアドステートメント(準備された文)を作成
    $sql = 'SELECT  *  FROM  users_1 ORDER BY user_id DESC LIMIT 30 OFFSET 0;';
    $pre = $dbh->prepare($sql);

    // プレースホルダに値をバインド
    // XXX 今回は入れる値なし

    // SQLを実行
    $r = $pre->execute();

    // 読んできたデータをゲトる
    $data = $pre->fetchAll();
    var_dump($data);
} catch(PDOException $e) {
    echo "into catch <br>\n";
    echo $e->getMessage();
    return ;
}