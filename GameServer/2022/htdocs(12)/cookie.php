<?php  // cookie.php
// 出力バッファリング
ob_start();

var_dump($_COOKIE);

setcookie("test", "hoge");

$num = random_int(0, 99999);
setcookie("num", strval($num));

var_dump($num);
var_dump($_COOKIE);

// バッファリングした内容を出力してバッファリング終了
ob_end_flush();
