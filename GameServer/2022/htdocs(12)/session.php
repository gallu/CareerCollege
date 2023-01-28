<?php  // session.php
// 出力バッファリング
ob_start();
session_start();
var_dump($_SESSION);

$_SESSION["test"] = "hoge";

$num = random_int(0, 99999);
$_SESSION["num"] = $num;

var_dump($num);
var_dump($_SESSION);

// バッファリングした内容を出力してバッファリング終了
ob_end_flush();
