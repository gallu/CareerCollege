<?php // login.php

// 初期処理
require_once('./init.php');

//
require_once('./Authentication.php');

// ログインの確認
if (false === Authentication::isLogin($_POST['id'], $_POST['pw'])) {
    echo 'ログインできませんでした';
    exit;
}
//
//echo 'ログインできました';
// 認可開始
Authorization::authOn( Authentication::getUser() );

// ログイン後TopPageに遷移
header('Location: ./top.php');

