<?php  // login.php
declare(strict_types=1);
ob_start();
session_start();

require_once  __DIR__ . "/Authentication.php";
require_once  __DIR__ . "/Authorization.php";

// 入力を取得
$email = (string) ($_POST["email"] ?? "");
$pw = (string) ($_POST["pw"] ?? "");
// var_dump($email, $pw);

// validate
if ("" === $email || "" === $pw) {
    // XXX
    echo "emailかpasswordが空だよ？";
    exit;
}

//
$auth = new Authentication();
$r = $auth->login($email, $pw);
var_dump($r);
if (null === $r) {
    // XXX
    echo "ログインできなかったよ？";
    exit;
}

// [memo]ここまできたら認証ok

$autho = new Authorization();
$autho->onLogin($r);

header("Location: ./top.php");

