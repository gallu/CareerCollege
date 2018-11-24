<?php  // user_card_list.php

// 認証付き初期処理
require_once('./init_auth.php');
//
require_once('./Card.php');
require_once('./DB.php');

// 「自分の」カードの一覧をSQLで取得
// DBハンドルを取得する
$dbh = DB::getHandle();
//
$sql = 'SELECT *
          FROM user_cards
          LEFT JOIN cards ON cards.card_id = user_cards.card_id
         WHERE user_id = :user_id ORDER BY user_cards.card_id DESC ;';
$pre = $dbh->prepare($sql);
// プレースホルダへの値のbind
$user_id = Authorization::getUserId();
$pre->bindValue(':user_id', $user_id);
// SQLの実行
$r = $pre->execute();
// データの取得
$list = $pre->fetchAll(PDO::FETCH_ASSOC);
//var_dump($list);

// 出力
foreach($list as $datum) {
    echo 'カード名: ', $datum['card_name'], "<br>\n";
    echo "<img src='{$datum['image_uri']}' width=100><br>\n";
    echo "<br><br>\n";
}

