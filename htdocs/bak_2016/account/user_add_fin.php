<?php
//
require_once('init_auth.php');

// CSRFトークンをチェックする
if (false === check_csrf_token()) {
    header('Location: ./user_list.php');
    exit;
}

// データを取得する
// XXX ちょっと雑なコード
foreach(['id', 'pw', 'memo'] as $p) {
    $$p = (string)@$_POST[$p];
}

// データを簡単にvalidteする
$error_flg = false;

if ('' === $id) {
    echo 'IDは必須です<br>';
    $error_flg = true;
}
if ('' === $pw) {
    echo 'パスワードは必須です<br>';
    $error_flg = true;
}

// エラーなら(画面表示して)終了
if (true === $error_flg) {
    exit;
}

// ユーザを登録する
// 「準備された文」を用意する
$sql = 'INSERT INTO users(user_id, password, memo)
             VALUES(:user_id, :password, :memo);';
$pre = $dbh->prepare($sql);

// プレースホルダに値をバインドする
$pre->bindValue(':user_id', $id);
$pre->bindValue(':password', password_hash($pw, PASSWORD_DEFAULT));
$pre->bindValue(':memo', $memo);

// SQLを実行する
$r = $pre->execute();
if (false == $r) {
    echo 'DB insertエラーです。IDが重複している可能性があります';
    exit;
}

//
?><!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=1;">
<title>カフェショップ会計</title>
</head>

<body>
<h1>カフェショップ会計　会員登録</h1>
登録が完了しました。<br>
<a href="./user_list.php">ログインユーザ一覧</a>

</body>
</html>

