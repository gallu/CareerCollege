<?php
//
require_once('init_auth.php');

// 簡単にチェック
$id = (string)@$_POST['id'];
$pw = (string)@$_POST['pw'];
if ( ('' === $id)||('' === $pw) ) {
    header('Location: ./user_list.php');
    exit;
}

// CSRFチェック
if (false === check_csrf_token()) {
    header('Location: ./user_list.php');
    exit;
}

// XXX 一旦、パスワードのvalidateはしない。したい場合はここで

// DBに対してupdateをする
// ユーザの一覧作成
// 「準備された文」を用意
$sql = 'UPDATE users SET password=:password WHERE user_id=:user_id;';
$pre = $dbh->prepare($sql);
//var_dump($dbh->errorinfo());

// プレースホルダに値をバインド
$pre->bindValue(':password', password_hash($pw, PASSWORD_DEFAULT));
$pre->bindValue(':user_id', $id);

// SQL文を実行
$r = $pre->execute();

?><!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=1;">
<title>カフェショップ会計</title>
</head>

<body>
<h1>ユーザ パスワード変更</h1>
パスワードを変更しました。<br>
<br>
<a href="./user_list.php">ログインユーザ一覧</a><br>

</body>
</html>