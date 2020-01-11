<?php  // auth.php
require_once('./db.php');

// tokenの取得
$token = (string)($_GET['token'] ?? '');
//var_dump($token);

// 認証の確認(token)
// DBに接続
$dbh = get_dbh();
// 該当レコードを取得
$sql = 'SELECT * FROM users WHERE user_token = :user_token;';
$pre = $dbh->prepare($sql);
//var_dump($pre);
// 値をbind
$pre->bindValue(':user_token', $token);
// SQLを実行
$r = $pre->execute();
//var_dump($r);
// レコードを取得
$user = $pre->fetch();
//var_dump($user);

// 結果をreturn
if (false === $user) {
    echo 'NG';
    exit;
}
//echo 'OK';
