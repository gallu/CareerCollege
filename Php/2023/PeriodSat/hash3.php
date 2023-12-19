<?php  // hash3.php

$raw_pass = "password";

$t = microtime(true);
$h = md5($raw_pass);
$te = microtime(true) - $t;
printf("md5) %.16f<br>\n", $te);

$t = microtime(true);
$h = password_hash($raw_pass, PASSWORD_DEFAULT);
$te = microtime(true) - $t;
printf("pwh) %.16f<br>\n", $te);

$t = microtime(true);
$h = password_hash($raw_pass, PASSWORD_DEFAULT, ["cost" => 12]);
$te = microtime(true) - $t;
printf("pwh) %.16f<br>\n", $te);

