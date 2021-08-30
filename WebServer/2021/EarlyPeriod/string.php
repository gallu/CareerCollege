<?php  // string.php
//  https://dev2.m-fr.net/アカウント名/string.php
declare(strict_types=1);

// 文字列結合
$s = 'abc';
$s2 = 'xyz';
$string = $s . $s2;
var_dump($string);
// $string = $s + $s2; // Fatal error になる
echo "<br>\n";

// 出力まわり
$i = 99;
echo "i is " . $i . "<br>\n";
echo "i is " , $i , "<br>\n"; // echoに限り、,(カンマ)でもつなげられる
echo "i is {$i} <br>\n"; // ダブルクォート内の変数は展開される
echo 'i is {$i} <br>\n'; // シングルクォート内の変数は展開されない

