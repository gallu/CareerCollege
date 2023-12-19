<?php  // hash3.php

$raw_pass = "password";


$t = microtime(true);
$h = md5($raw_pass);
$et = microtime(true) - $t;
printf("%.16f <br>\n", $et);

$t = microtime(true);
$ph = password_hash($raw_pass, PASSWORD_DEFAULT);
$et = microtime(true) - $t;
printf("%.16f <br>\n", $et);

$t = microtime(true);
$ph = password_hash($raw_pass, PASSWORD_DEFAULT, ["cost"=>14]);
$et = microtime(true) - $t;
printf("%.16f <br>\n", $et);

