<?php   // date_class.php
//   https://dev2.m-fr.net/アカウント名/date_class.php
//
$date_obj = new DateTime();
//var_dump($date_obj);
echo  $date_obj->format( DateTimeInterface::COOKIE ), "<br>\n";
echo  $date_obj->format( DateTimeInterface::ATOM ), "<br>\n";
echo  $date_obj->format( 'Y/m/d H:i:s' ), "<br>\n";

//
echo  $date_obj->getTimestamp() , "<br>\n";

//
$date_obj = new DateTime('Sat Jun 12 12:50:08 JST 2021');
echo  $date_obj->format( 'Y/m/d H:i:s' ), "<br>\n";

// 86400; // 24*60*60
$date_obj->setTimestamp( $date_obj->getTimestamp() + 86400 );
echo  $date_obj->format( 'Y/m/d H:i:s' ), "<br>\n";
//
$date_obj->add( new DateInterval('P1D') );
echo  $date_obj->format( 'Y/m/d H:i:s' ), "<br>\n";
//
$date_obj->add( DateInterval::createFromDateString('1 day') );
echo  $date_obj->format( 'Y/m/d H:i:s' ), "<br>\n";









