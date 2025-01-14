<?php  // hash2.php

// 生パスワード
$password = "password";

// 絶対だめ！！
// ストレッチしてもsaltつけてもだめ！！
$hpass_1 = md5($password);
echo "{$hpass_1} <br>\n";
$hpass_2 = sha1($password);
echo "{$hpass_2} <br>\n";

//
$hpass = password_hash($password, PASSWORD_DEFAULT);
echo "{$hpass} <br>\n";

//
$r = password_verify($password, $hpass);
var_dump($r);

$r = password_verify($password . "a", $hpass);
var_dump($r);
