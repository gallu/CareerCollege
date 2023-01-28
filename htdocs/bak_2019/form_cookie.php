<?php  // form_cookie.php
// http://dev2.m-fr.net/XXXX/form_cookie.php
//
ob_start();

//
var_dump($_COOKIE);
//
$i = mt_rand(0, 9999);

// Cookie 設定
setcookie('rand', $i, 0);
//
echo "Cookieに {$i} を設定しました。";

//
ob_end_flush();
