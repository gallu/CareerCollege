<?php

/*
 * 認証付きの初期処理
 */
require_once('init.php');

// 認証確認(非ログイン状態ならindexに突き返す)
if (empty($_SESSION['user_id'])) {
    header('Location: ./index.php');
    exit ;
}

