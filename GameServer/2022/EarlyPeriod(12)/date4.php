<?php   // date4.php

$s = "2022-01-31 00:00:00";
echo "{$s} <br>";

/*
// 一か月後
$t = time();
$t += nnnnnn; // 86400 * 
$d_string = date("Y-m-d H:i:s", $t);
echo "{$d_string} <br>";
*/
//
$d_obj = new DateTime($s);
$d_obj->add(new DateInterval("P1M"));
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";
