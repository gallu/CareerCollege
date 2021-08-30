<?php   // string_2.php

// 文字列の結合とか
$s = 'abc';
$t = 'xyz';
//$u = "{$s}{$t}";
$u = $s . $t;
echo "{$u} <br>\n";
var_dump($u);

// 注意！！！
// XXX PHP8だと Fatal error
/*
$u = $s + $t;
echo "{$u} <br>\n";
var_dump($u);
*/

// 「数値と数値」の文字列連結
$i = 10;
$j = 20;
$k = $i . $j;
echo "{$k} <br>\n";
var_dump($k);









