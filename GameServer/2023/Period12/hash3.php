<?php  // hash3.php

$raw_pass = "password";

// 絶対だめ
$t = microtime(true);
$h = md5($raw_pass);
$et = microtime(true) - $t;
printf("%.16f <br>\n", $et);

// こっち推奨
$t = microtime(true);
$h = password_hash($raw_pass, PASSWORD_DEFAULT);
$et = microtime(true) - $t;
printf("%.16f <br>\n", $et);

$t = microtime(true);
$h = password_hash($raw_pass, PASSWORD_DEFAULT, ["cost" => 13]);
$et = microtime(true) - $t;
printf("%.16f <br>\n", $et);

