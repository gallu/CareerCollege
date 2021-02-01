<?php  // date.php
//  http://dev2.m-fr.net/アカウント名/date.php

$t = time();
var_dump($t);
echo "<br>\n";

$s = date('Y-m-d H:i:s', $t);
echo $s , "<br>\n";

$obj = new DateTime();
echo $obj->format('Y-m-d H:i:s') , "<br>\n";

$immu_obj = new DateTimeImmutable();
echo $immu_obj->format('Y-m-d H:i:s') , "<br>\n";

/*
 */
$tt = strtotime('Feb. 18th, 2015');
echo date('Y-m-d H:i:s', $tt) , "<br>\n";

$tt = strtotime('18th February 2015');
echo date('Y-m-d H:i:s', $tt) , "<br>\n";

$tt = strtotime('2020/07/07 11:22:33');
echo date('Y-m-d H:i:s', $tt) , "<br>\n";

// Immutable, strtotime, + 1 day
$tt = strtotime('2020/07/07 11:22:33 + 1 day');
echo date('Y-m-d H:i:s', $tt) , "<br>\n";

$obj = new DateTime();
$obj->add(new DateInterval('P1D'));
echo $obj->format('Y-m-d H:i:s') , "<br>\n";

// XXX + 1 month
$tt = strtotime('2020/07/07 11:22:33 + 1 month');
echo date('Y-m-d H:i:s', $tt) , "<br>\n";
$tt = strtotime('2019/03/31 11:22:33 + 1 month');
echo date('Y-m-d H:i:s', $tt) , "<br>\n";
        
$obj = new DateTime('2019/03/31 11:22:33');
$obj->add(new DateInterval('P1M'));
echo $obj->format('Y-m-d H:i:s') , "<br>\n";





