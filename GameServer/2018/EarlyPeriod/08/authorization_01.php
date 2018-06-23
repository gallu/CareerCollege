<?php  // authorization_01.php

// Webブラウザゲーで使いやすい方法
ob_start();
session_start(); // セッション開始

// セッションIDの確認
var_dump(session_id());
var_dump($_COOKIE);
