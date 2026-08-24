<?php  // pass2.php
declare(strict_types=1);

$raw_pass = str_repeat('a', 72);
var_dump($raw_pass);
echo "<br>\n";

$h = password_hash($raw_pass, PASSWORD_DEFAULT);
echo "{$h} <br>\n";

$r = password_verify($raw_pass, $h);
var_dump($r);
echo "<br>\n";

// bcrypt アルゴリズムの場合
// [memo]bcryptの「PHPが使ってる実装」は、先頭72文字までしか見ない
$r = password_verify($raw_pass . "abc", $h);
var_dump($r);
echo "<br>\n";
