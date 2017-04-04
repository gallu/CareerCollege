<?php
// login.php

/*
 authentication
 「入力されたID/pass」と「DBのID/pass」の比較
 */
// 「入力されたID/pass」の把握
$email = $_POST['email'];
$pass = $_POST['pass'];

// 「DBのID/pass」の把握
// ---------------------
// DBに接続

// 「準備されたSQL文」を用意
$sql = 'SELECT * FROM users WHERE email = :email;';
$pre = $dbh->prepare($sql);

// 値を紐づける
$pre->bindValue(':email', $email);

// SQL文を発行する
$r = $pre->execute();
// データを取得
$row = $pre->fetch(PDO::FETCH_ASSOC);
if (true === empty($row)) {
    // XXX emailがないぽい
    exit;
}

// 「DBのパスワード」と「入力されたパスワード」を比較
if (false === password_verify($pass, $row['password'])) {
    // XXX パスワード不一致！！
    exit;
}

// XXX ここまで来たらユーザ認証ができてる！！

/*
 authorization開始
 */
session_start();
session_regenerate_id(true); // 脆弱性対策！！
$_SESSION['user'] = ユーザのデータ各種;

// ログイン後TopPageに遷移
header('Location: /top.php');

