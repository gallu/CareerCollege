<?php  // hash.php

$base = "Hello";

// 「絶対に使うな！！！」
$md5 = md5($base);
var_dump($md5);
echo "<br>\n";
$sha1 = sha1($base);
var_dump($sha1);
echo "<br>\n";

// 使うならこっち
$sha512 = hash("sha512", $base);
var_dump($sha512);
echo "<br>\n";

$sha256 = hash("sha256", $base);
var_dump($sha256);
echo "<br>\n";
