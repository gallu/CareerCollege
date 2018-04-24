<?php
// session.php
ob_start(); // 出力バッファ
session_start(); // セッション開始
var_dump($_COOKIE);
var_dump($_SESSION);
//
$i = @$_SESSION['count'] + mt_rand(1, 10);
//
$_SESSION['count'] = $i;
//
var_dump($i);
//
ob_end_flush(); // バッファの終了と出力
