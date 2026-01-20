<?php  // swap.php

//
$x = "aaa";
$y = "zzz";
// これはダメ
$x = $y;
$y = $x;
var_dump($x, $y);

//
$x = "aaa";
$y = "zzz";
//
$tmp = $x;
$x = $y;
$y = $tmp;
var_dump($x, $y);

//
$x = "aaa";
$y = "zzz";
//
[$x, $y] = [$y, $x];
var_dump($x, $y);

