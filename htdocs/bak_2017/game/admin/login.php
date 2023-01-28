<?php
// login.php

// request($_POST)から、IDとPWを取得
// DBから「入力されたID」の情報を取得
// 情報を比較( password_verify() )

// ログインできたら
session_start();

// 「ログインできた」情報を保持
$_SESSION['auth']['id'] = 'furu';
$_SESSION['auth']['name'] = '古庄';

// ログイン後TopPageに遷移
header('Location: ./top.php');

