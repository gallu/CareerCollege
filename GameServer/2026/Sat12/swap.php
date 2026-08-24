<?php  // swap.php

$i = 123;
$k = 456;
// これはダメ
$i = $k;
$k = $i;
var_dump($i, $k);
echo "<br>";

$i = 123;
$k = 456;
// どこの言語でも対応できるやり方
$tmp = $i;
$i = $k;
$k = $tmp;
var_dump($i, $k);
echo "<br>";

$i = 123;
$k = 456;
// 言語を選ぶやり方
[$i, $k] = [$k, $i];
var_dump($i, $k);
echo "<br>";

