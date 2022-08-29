<?php   // date3.php

$ds = "Saturday, 25-Jun-2022 17:00:29 JST";

//
$t = strtotime($ds);
$d_string = date("Y-m-d H:i:s", $t);
echo "{$d_string} <br>";

//
$d_obj = new DateTime($ds);
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";

