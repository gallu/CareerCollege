<?php // Zeller.php

$y = 2018;
$m = 10;
$d = 2;
// ----------------
// 参考： https://ja.wikipedia.org/wiki/%E3%83%84%E3%82%A7%E3%83%A9%E3%83%BC%E3%81%AE%E5%85%AC%E5%BC%8F

// 1月と2月は、前年のそれぞれ13月・14月として扱う
if ( $m === 1 or $m === 2) {
    $y --; // 前年
    $m += 12; // 13月・14月
}

// XXX 「紀元前 y ^ {\displaystyle {\hat {y}}} \hat y 年は西暦 1 − y ^ {\displaystyle 1-{\hat {y}}} 1 - \hat y 年として扱う。」はオミット

// XXX Yは$YYとして扱う
$C = floor($y / 100);
$YY = $y % 100;
//
$r = (-2 * $C) + floor($C / 4);
//
$h = ( $d 
     + floor(
              (26 * ($m + 1))
                /
              10
             )
     + $YY
     + floor($YY / 4)
     + $r ) % 7;
var_dump($h);
$week = ['土', '日', '月', '火', '水', '木', '金'];
var_dump($week[$h]);

