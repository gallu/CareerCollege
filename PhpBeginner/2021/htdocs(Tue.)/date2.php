<?php   // date2.php

$t = time();
echo  date('Y/m/d H:i:s', $t) , "<br>\n";

//
$t =  strtotime('yesterday');
echo  date('Y/m/d H:i:s', $t) , "<br>\n";
//
$t =  strtotime('-2 days');
echo  date('Y/m/d H:i:s', $t) , "<br>\n";
//
$t =  strtotime('first day of');
echo  date('Y/m/d H:i:s', $t) , "<br>\n";
$t =  strtotime('last day of 2020-02');
echo  date('Y/m/d H:i:s', $t) , "<br>\n";

//
$t =  strtotime('+1 month');
echo  date('Y/m/d H:i:s', $t) , "<br>\n";
//
$t =  strtotime('+1 month', strtotime('2021/01/31'));
echo  date('Y/m/d H:i:s', $t) , "<br>\n";

//
echo  date('l', strtotime('1970/11/25'));





