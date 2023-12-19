<?php  // hash2.php

$raw_pass = "password";
var_dump($raw_pass);

// これはダメ
$h = md5($raw_pass);
var_dump($h);

//
$ph = password_hash($raw_pass, PASSWORD_DEFAULT);
var_dump($ph);

$r = password_verify($raw_pass, $ph);
var_dump($r);

$r = password_verify($raw_pass . "a", $ph);
var_dump($r);
