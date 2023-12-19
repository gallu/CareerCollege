<?php  // hash1.php

$base_string = "abcdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
var_dump($base_string);

// つかっちゃいけないアルゴリズム
$h = md5($base_string);
var_dump($h);
$h = sha1($base_string);
var_dump($h);

// 現時点では比較的推奨されているアルゴリズム
$h = hash("sha512", $base_string);
var_dump($h);
$h = hash("sha256", $base_string);
var_dump($h);
