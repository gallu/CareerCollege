<?php   // string.php
// 大文字、小文字への変換
$s = 'aBcDe';
$s_lower = strtolower($s);
$s_upper = strtoupper($s);
echo "{$s} <br>\n";
echo "{$s_lower} <br>\n";
echo "{$s_upper} <br>\n";

//　１文字を抜き出す
echo "{$s[0]} <br>\n";
echo "{$s[2]} <br>\n";

// 文字で分解する
$s = '1,a,2,b';
$awk = explode(',', $s);
var_dump($awk);
