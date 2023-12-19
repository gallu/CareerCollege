<?php  // swap.php
//
$i = 111;
$j = 999;

// これはダメ
// $i = $j;
// $j = $i;
// var_dump($i, $j);

//
$wk = $i;
$i = $j;
$j = $wk;
var_dump($i, $j);

//
list($i, $j) = [$j, $i];
var_dump($i, $j);

//
$i = $i ^ $j;
$j = $i ^ $j;
$i = $i ^ $j;
var_dump($i, $j);





