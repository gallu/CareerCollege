<?php  // hash2.php

$raw_pass = "password";
var_dump($raw_pass);

// ダメの代表
$t = microtime(true);
$h = md5($raw_pass);
$te = microtime(true) - $t;
var_dump($h);
printf("%.16f \n", $te);

// こちらで
$t = microtime(true);
$h = password_hash($raw_pass, PASSWORD_DEFAULT);
$te = microtime(true) - $t;
var_dump($h);
printf("%.16f \n", $te);

// より強く
$t = microtime(true);
$h = password_hash($raw_pass, PASSWORD_DEFAULT, ["cost" => 14]);
$te = microtime(true) - $t;
var_dump($h);
printf("%.16f \n", $te);

// 比較の仕方
$r = password_verify($raw_pass, $h);
var_dump($r);

$r = password_verify($raw_pass . " ", $h);
var_dump($r);
