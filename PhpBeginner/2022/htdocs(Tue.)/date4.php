<?php   // date4.php
//
/*
$t = time();
$d_string = date("Y-m-d H:i:s", $t);
echo "{$d_string} <br><br>";
//
$t += XXXXXX; // 60*60*24*n(n日を秒で)
$d_string = date("Y-m-d H:i:s", $t);
echo "{$d_string} <br><br>";
*/

//
$d_obj = new DateTime("2022-01-31");
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";
// P10D / P2W / [P1M / P1Y] 
$d_obj->add(new DateInterval("P1M"));
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";
