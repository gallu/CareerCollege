<?php  // auth_1.php
// http://dev2.m-fr.net/furu/gacha/auth_1.php?token=96bc7ec34ceda04bed7cf2c4a2970fa4409c30b7375a488e999eb97b4a2ddbeb

require_once('./db.php');

// リクエストからuser_tokenを把握
$token = (string)($_GET['token'] ?? '');

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
$row = $pre->fetch();
//var_dump($row);

// 結果をreturn
if (false === $row) {
    echo 'NG';
} else {
    echo 'OK';
}

