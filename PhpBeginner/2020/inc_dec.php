<?php   // inc_dec.php
// http://dev2.m-fr.net/アカウント名/inc_dec.php
/*
$i = 0;
$i ++; // 後置
var_dump($i);
++$i;  // 前置
var_dump($i);
*/
//
$i = 5;
$j = $i ++;
//
$i = 5;
$k = ++ $i;
//
var_dump($j, $k);
