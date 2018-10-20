<?php // login.php
//
ob_start();
session_start();

require_once('./Authentication.php');
require_once('./Authorization.php');

// ログインの確認
if (false === Authentication::isLogin($_POST['id'], $_POST['pw'])) {
    echo 'ログインできませんでした';
    exit;
}
//
//echo 'ログインできました';
// 認可開始
Authorization::authOn();

// ログイン後TopPageに遷移
header('Location: ./top.php');

