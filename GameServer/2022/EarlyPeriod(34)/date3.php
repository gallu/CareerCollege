<?php   // date3.php

//
$s = "Saturday, 18-Jun-2022 14:56:48 JST";
echo "{$s} <br>";
//
$t = strtotime($s);
var_dump($t);
echo "<br>";
//
$d_string = date("Y-m-d H:i:s", $t);
echo "{$d_string} <br>";
echo "<br>";

//
$d_obj = new DateTime($s);
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";

