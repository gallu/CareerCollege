<?php  // date.php

$d = date(DATE_COOKIE);
echo $d , "<br>\n";

$d = date(DATE_ATOM);
echo $d , "<br>\n";

$d = date(DATE_W3C);
echo $d , "<br>\n";

$d = date('Y/m/d H:i:s', 2147483647 + 1);
echo $d , "<br>\n";

//
$t = time();
echo $t , "<br>\n";

// 
$now = time();
$d = date('Y/m/d', $now);
echo $d , "<br>\n";
//
$now += 86400; // 24*60*60
$d = date('Y/m/d', $now);
echo $d , "<br>\n";

/*
Sat Jun 12 12:50:08 JST 2021
16/Apr/2021:00:01:54 +0900
May 6, 2007
5th June, 2007
*/
//
$t = strtotime('Sat Jun 12 12:50:08 JST 2021');
$d = date('Y/m/d H:i:s', $t);
echo $d , "<br>\n";

$t = strtotime('16/Apr/2021:00:01:54 +0900');
$d = date('Y/m/d H:i:s', $t);
echo $d , "<br>\n";

$t = strtotime('May 6, 2007');
$d = date('Y/m/d H:i:s', $t);
echo $d , "<br>\n";

$t = strtotime('5th June, 2007');
$d = date('Y/m/d H:i:s', $t);
echo $d , "<br>\n";






