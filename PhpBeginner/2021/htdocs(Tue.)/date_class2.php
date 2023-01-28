<?php   // date_class2.php

// 1日後を取得
$t = time();
$t += 86400; // 24*60*60
echo date('Y-m-d H:i:s', $t) , "<br>\n";
//
$date_obj = new DateTime();
$date_obj->setTimestamp( $date_obj->getTimestamp() + 86400 );
echo $date_obj->format('Y-m-d H:i:s') , "<br>\n";
//
$date_obj->add( new DateInterval('P1D') );
echo $date_obj->format('Y-m-d H:i:s') , "<br>\n";

//
$date_obj = new DateTime('yesterday');
echo $date_obj->format('Y-m-d H:i:s') , "<br>\n";
//
$date_obj = new DateTime('-3 days');
echo $date_obj->format('Y-m-d H:i:s') , "<br>\n";

