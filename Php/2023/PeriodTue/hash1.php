<?php  // hash1.php

$str = "abc";
var_dump($str);

// 使っちゃだめ
$h = md5($str);
var_dump($h);
// 使っちゃだめ
$h = sha1($str);
var_dump($h);

// 使うならせめてこの辺
$h = hash('sha512', $str);
var_dump($h);
$h = hash('sha256', $str);
var_dump($h);

