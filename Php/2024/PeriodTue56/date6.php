<?php  // date6.php

echo date(DATE_ATOM) , "<br>";

// 原則、やっちゃダメ！！！！
$t = strtotime("+1 month");
echo date(DATE_ATOM, $t) , "<br>";

$t = strtotime("2024-01-31 +1 month");
echo date(DATE_ATOM, $t) , "<br>";

//
$t = strtotime("+1 day");
echo date(DATE_ATOM, $t) , "<br>";

$t = time();
$t += 86400;
echo date(DATE_ATOM, $t) , "<br>";

// 一か月後……じゃなくて30日後
$t = time();
$t += 86400 * 30;
echo date(DATE_ATOM, $t) , "<br>";


