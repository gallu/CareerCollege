<?php  // date_class2.php
//
$date_obj = new DateTime('yesterday');
echo  $date_obj->format( 'Y/m/d H:i:s' ), "<br>\n";
//
$date_obj = new DateTime('first day of');
echo  $date_obj->format( 'Y/m/d H:i:s' ), "<br>\n";
//
$date_obj = new DateTime('last day of ' . date('F Y', 10000000));
echo  $date_obj->format( 'Y/m/d H:i:s' ), "<br>\n";

//
$date_obj = new DateTime('2021/1/31');
$date_obj->add( new DateInterval('P1M') );
echo  $date_obj->format( 'Y/m/d H:i:s' ), "<br>\n";
