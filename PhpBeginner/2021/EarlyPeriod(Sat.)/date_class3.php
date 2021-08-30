<?php   // date_class3.php
//
$date_obj = new DateTimeImmutable();
echo  $date_obj->format( 'Y/m/d H:i:s' ), "<br>\n";
//
$d2 = $date_obj->add( new DateInterval('P1D') );
echo  $date_obj->format( 'Y/m/d H:i:s' ), "<br>\n";
echo  $d2->format( 'Y/m/d H:i:s' ), "<br>\n";

