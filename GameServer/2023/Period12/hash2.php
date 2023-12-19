<?php  // hash2.php

$raw_pass = "password";
var_dump($raw_pass);

// 絶対だめ
$h = md5($raw_pass);
var_dump($h);

// こっち推奨
$h = password_hash($raw_pass, PASSWORD_DEFAULT);
var_dump($h);
$h = password_hash($raw_pass, PASSWORD_DEFAULT, ["cost" => 13]);
var_dump($h);

// 比較するとき
$r = password_verify($raw_pass, $h);
var_dump($r);
$r = password_verify($raw_pass." ", $h);
var_dump($r);
