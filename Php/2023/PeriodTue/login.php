<?php  // login.php
declare(strict_types=1);
ob_start();
session_start();

require_once __DIR__ . "/Authentication.php";
require_once __DIR__ . "/Authorization.php";

// emailとパスワードを取得
$email = (string)($_POST["email"] ?? "");
$pw = (string)($_POST["pw"] ?? "");
// validate
if ( ("" === $email)||("" === $pw) ) {
    // XXX
    echo "emailまたはパスワードが、空だよ？？？";
    exit;
}

// 認証処理
$auth = new Authentication();
$user = $auth->login($email, $pw);
var_dump($user);
if (null === $user) {
    // XXX
    echo "emailまたはパスワードを間違えてますよ？？？";
    exit;
}

// [memo]ここまできたら「ログインしてよい」状態

// ログイン処理
$autho = new Authorization();
$autho->onLogin($user);

// ログイン後TopPageに遷移
header("Location: ./top.php");
