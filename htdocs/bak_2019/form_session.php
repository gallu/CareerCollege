<?php  // form_session.php
//
ob_start();
session_start(); // セッションの開始
//
var_dump($_COOKIE);
var_dump($_SESSION);

//
$i = mt_rand(0, 9999);
$_SESSION['rand'] = $i;
echo "Cookieに {$i} を設定しました。";

//
ob_end_flush();
