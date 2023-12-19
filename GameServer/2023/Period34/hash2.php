<?php  // hash2.php

$raw_pass = "password";
var_dump($raw_pass);

$h = password_hash($raw_pass, PASSWORD_DEFAULT);
var_dump($h);

$r = password_verify($raw_pass, $h);
var_dump($r);
$r = password_verify($raw_pass . " ", $h);
var_dump($r);

