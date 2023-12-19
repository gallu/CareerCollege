<?php  // login.php
declare(strict_types=1);
ob_start();
session_start();
require_once __DIR__ . "/Authentication.php";
require_once __DIR__ . "/Authorization.php";

// 入力値の取得
$email = (string)($_POST['email'] ?? '');
$pw = (string)($_POST['pw'] ?? '');
// var_dump($email, $pw);

// validate
$error = [];
if ('' === $email) {
    $error["email"] = "emailが空だよ？";
}
if ('' === $pw) {
    $error["pw"] = "パスワードが空だよ？";
}
if ([] !== $error) {
    // エラー用処理
    // XXX 後で丁寧に
    var_dump($error);
    exit;
}

// ログインしてみる
$auth = new Authentication();
$r = $auth->login($email, $pw);
// var_dump($r);
if (null === $r) {
    // XXX 後で丁寧に
    echo "ログインできなかった　orz";
    exit;
}
echo "ログイン成功したよ！！";

// ログインさせる
(new Authorization())->onLogin($r);

header("Location: ./top.php");
