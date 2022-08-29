<?php  // date.php
//
$t = time();
var_dump($t);
echo "<br>";
//
$d_string = date("Y-m-d H:i:s", $t);
echo "{$d_string} <br>";
$d_string = date("Y-m-d H:i:s");
echo "{$d_string} <br>";
$d_string = date(DATE_ATOM);
echo "{$d_string} <br>";
$d_string = date(DATE_COOKIE);
echo "{$d_string} <br>";
echo "<br>";

//
$d_obj = new DateTime();
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";
echo "<br>";

//
$d_obj = new DateTimeImmutable();
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";

