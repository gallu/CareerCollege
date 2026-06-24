<?php  // hash.php

$raw_string = "password";
$raw_string2 = "a";

// ちょっと長いけどベター
$h = hash("sha512", $raw_string);
echo "{$h} <br>";
$h = hash("sha512", $raw_string2);
echo "{$h} <br>";
// こっちでもよし
$h = hash("sha256", $raw_string);
echo "{$h} <br>";
$h = hash("sha256", $raw_string2);
echo "{$h} <br>";

// パスワードならこちら
$h = password_hash($raw_string, PASSWORD_DEFAULT);
echo "{$h} <br>";
$h = password_hash($raw_string2, PASSWORD_DEFAULT);
echo "{$h} <br>";


// 以下は「使っちゃだめ！！！！！」
$h = md5($raw_string);
echo "{$h} <br>";
$h = md5($raw_string2);
echo "{$h} <br>";

$h = sha1($raw_string);
echo "{$h} <br>";
$h = sha1($raw_string2);
echo "{$h} <br>";

