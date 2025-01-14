<?php  // swap.php

$i = 111;
$j = 999;

// XXX これは駄目
$i = $j;
$j = $i;
var_dump($i, $j);
echo "<br> \n";

$i = 111;
$j = 999;
// どの言語でも有効
$tmp = $i;
$i = $j;
$j = $tmp;
var_dump($i, $j);
echo "<br> \n";

$i = 111;
$j = 999;
// 言語による
[$j, $i] = [$i, $j];
var_dump($i, $j);
echo "<br> \n";





