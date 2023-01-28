<?php   // date2.php

//
echo date("Y-m-d H:i:s") , "<br><br>";

//
$t = time();
$t += 86400; // 60*60*24(1日を秒で)
$d_string = date("Y-m-d H:i:s", $t);
echo "{$d_string} <br><br>";

//
$d_obj = new DateTime();
$d_obj->add(new DateInterval("P1D"));
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";

//
$d_obj = new DateTimeImmutable();
$d_obj2 = $d_obj->add(new DateInterval("P1D"));
$d_string = $d_obj2->format("Y-m-d H:i:s");
echo "{$d_string} <br>";



