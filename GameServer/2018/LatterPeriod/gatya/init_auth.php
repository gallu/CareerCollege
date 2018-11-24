<?php  // init_auth.php

// 初期処理
require_once('./init.php');

// 認可チェック
if (false === Authorization::isAuth()) {
    header('Location: ./index.html');
    return ;
}

