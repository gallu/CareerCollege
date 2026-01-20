<?php  // swap.php

$x = 10;
$y = 20;

// xとyを交換する
// XXX これは「だめ」
$x = $y;
$y = $x;
var_dump($x, $y);

//
$x = 10;
$y = 20;
//
$tmp = $x;
$x = $y;
$y = $tmp;
var_dump($x, $y);

//
$x = 10;
$y = 20;
//
[$x, $y] = [$y, $x];
var_dump($x, $y);
