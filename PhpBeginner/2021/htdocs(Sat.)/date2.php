<?php  // date2.php
//
$t = strtotime('yesterday');
$d = date('Y/m/d H:i:s', $t);
echo $d , "<br>\n";
//
$t = strtotime('first day of');
$d = date('Y/m/d H:i:s', $t);
echo $d , "<br>\n";
//
$t = strtotime('last day of', 10000000);
$d = date('Y/m/d H:i:s', $t);
echo $d , "<br>\n";
//
$t = strtotime('+2 days');
$d = date('Y/m/d H:i:s', $t);
echo $d , "<br>\n";

// XXX
$t = strtotime('+1 month');
$d = date('Y/m/d H:i:s', $t);
echo $d , "<br>\n";
//
$t = strtotime('+1 month', strtotime('2021-01-01'));
$d = date('Y/m/d H:i:s', $t);
echo $d , "<br>\n";
//
$t = strtotime('+1 month', strtotime('2021-01-29'));
$d = date('Y/m/d H:i:s', $t);
echo $d , "<br>\n";
//
$t = strtotime('+1 year', strtotime('2020-02-29'));
$d = date('Y/m/d H:i:s', $t);
echo $d , "<br>\n";












