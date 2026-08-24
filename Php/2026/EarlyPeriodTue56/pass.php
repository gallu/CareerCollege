<?php  // pass.php
declare(strict_types=1);

$raw_password = 'password';
echo "raw: {$raw_password} <br>";

// hash化: 絶対やっちゃダメなやつ
$hpass_1 = md5($raw_password);
echo "md5: {$hpass_1} <br>";
$hpass_2 = sha1($raw_password);
echo "sha1: {$hpass_2} <br>";

// 
$h = password_hash($raw_password, PASSWORD_DEFAULT);
echo "{$h} <br>";

