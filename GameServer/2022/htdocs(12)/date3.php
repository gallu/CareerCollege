<?php   // date3.php

$s = "Saturday, 02-Jul-2022 10:14:37 JST";
echo "{$s} <br>";

//
$t = strtotime($s);
var_dump($t);
echo "<br>";
echo date("Y-m-d H:i:s", $t);
echo "<br>";

//
$d_obj = new DateTime($s);
echo $d_obj->format("Y-m-d H:i:s");
echo "<br>";

