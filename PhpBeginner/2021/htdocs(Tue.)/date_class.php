<?php   // date_class.php
//  https://dev2.m-fr.net/アカウント名/date_class.php

//
$date_obj = new DateTime();
echo  $date_obj->format( DateTimeInterface::ATOM ) , "<br>\n";
echo  $date_obj->format( 'Y-m-d H:i:s' ) , "<br>\n";
echo  $date_obj->format( 'Y年m月d日 H時i分s秒' ) , "<br>\n";

//
$t = $date_obj->getTimestamp();
echo $t , "<br>\n";

//
$date_obj->setTimestamp(-100000000);
echo  $date_obj->format( 'Y-m-d H:i:s' ) , "<br>\n";

//
$date2_obj = new DateTime('August 15th, 2014');
echo  $date2_obj->format( 'Y-m-d H:i:s' ) , "<br>\n";
