<?php   // date2.php
//
$d_string = date("Y-m-d H:i:s");
echo "{$d_string} <br><br>";

// 1日後
$t = time();
$t += 86400; // 24*60*60
$d_string = date("Y-m-d H:i:s", $t);
echo "{$d_string} <br>";

//
$d_obj = new DateTime();
$d_obj->add(new DateInterval("P1D"));
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";

//
$d_obj = new DateTimeImmutable();
$d_obj2 = $d_obj->add(new DateInterval("P1D"));
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";
$d_string = $d_obj2->format("Y-m-d H:i:s");
echo "{$d_string} <br>";


