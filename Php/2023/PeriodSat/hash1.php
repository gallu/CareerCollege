<?php  // hash1.php

$base_string = "abcd";
var_dump($base_string);

// つかっちゃいけない
$h = md5($base_string);
var_dump($h);
$h = sha1($base_string);
var_dump($h);

//　今のところ、こっちは使ってOK
$h = hash("sha512", $base_string);
var_dump($h);
$h = hash("sha256", $base_string);
var_dump($h);
