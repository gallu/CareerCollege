<?php // login.php

require_once('./Authentication.php');

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
header('./top.php');

