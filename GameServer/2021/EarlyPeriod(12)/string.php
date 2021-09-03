<?php   // string.php
// https://dev2.m-fr.net/アカウント名/string.php

// 文字列の分解
$awk = explode('d', '3d6');
//var_dump($awk);
echo  $awk[0] , "<br>\n";
echo  $awk[1] , "<br>\n";

// 「数字」を「数値」に変更
var_dump( $awk[0] );
$i = intval( $awk[0] );
var_dump( $i );

// 大文字にしたり子文字にしたり
echo "<br>\n";
$s = 'aBcDeF';
echo $s , "<br>\n";
// 小文字にする
$s_lo = strtolower($s);
echo $s_lo , "<br>\n";
// 大文字にする
$s_up = strtoupper($s);
echo $s_up , "<br>\n";













