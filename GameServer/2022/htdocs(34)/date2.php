<?php   // date2.php
//
$t = time();
$d_string = date("Y-m-d H:i:s", $t);
echo "{$d_string} <br>";
//
$t += 86400; // 60*60*24
$d_string = date("Y-m-d H:i:s", $t);
echo "{$d_string} <br>";
echo "<br>";

//
$d_obj = new DateTime();
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";
//
$d_obj->add(new DateInterval("P1D"));
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";
echo "<br>";

//
$d_obj = new DateTimeImmutable();
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";
//
$d_obj2 = $d_obj->add(new DateInterval("P1D"));
//
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";
$d_string = $d_obj2->format("Y-m-d H:i:s");
echo "{$d_string} <br>";
echo "<br>";
