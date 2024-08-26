<?php  // sql1.php

require_once  __DIR__ . "/pdo.php";

// SELECT * FROM items WHERE item_name = 'ピザ';

// 「外部からの入力」を仮定
$item_name = "ピザ";

// 絶対にゼッタイにぜったいにダメ！だめ！駄目！！！！！
// $sql = "SELECT * FROM items WHERE item_name = '{$item_name}';";
try {
    // プリペアドステートメント(準備された文)の作成
    $sql = '
        SELECT *
          FROM items
         WHERE item_name = :item_name
        ;
    ';
    $pre = $dbh->prepare($sql);
    // var_dump($pre);

    // プレースホルダへの値のバインド
    $pre->bindValue(":item_name", $item_name, PDO::PARAM_STR);

    // SQLの実行
    $r = $pre->execute();
    var_dump($r);

    // データの取得
    $data = $pre->fetchAll();
    var_dump($data);

} catch (PDOException $e) {
    // 本当はログとかに吐く
    echo $e->getmessage();
    exit;
}


