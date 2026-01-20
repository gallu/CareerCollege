<?php  // password.php

// 生パスワード(平文保存)
$raw = "p@ssword";

// 基本「絶対に」使うな！！！
$h = md5($raw);
var_dump($h);
echo "<br>";

$h = sha1($raw);
var_dump($h);
echo "<br>";

// PHPなら、これで
$h = password_hash($raw, PASSWORD_DEFAULT);
var_dump($h);
echo "<br>";

