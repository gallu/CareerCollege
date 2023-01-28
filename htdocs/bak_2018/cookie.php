<?php
// cookie.php
ob_start(); // 出力バッファ
var_dump($_COOKIE);
//
$i = @$_COOKIE['count'] + mt_rand(1, 10);
//
setcookie('count', $i);
//
var_dump($i);
//
ob_end_flush(); // バッファの終了と出力
