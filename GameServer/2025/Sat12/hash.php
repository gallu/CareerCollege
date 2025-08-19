<?php  // hash.php

$s = "a";
$s2 = "b";

// hash: MD5は「オワコン」なので基本使わない
$h = md5($s);
echo "MD5: {$h} <br>";
$h = md5($s2);
echo "MD5: {$h} <br>";

// hash: セキュリティ用途ならこっち
$h = hash("sha512", $s);
echo "sha512: {$h} <br>";
$h = hash("sha512", $s2);
echo "sha512: {$h} <br>";


