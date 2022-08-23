<?php   // date.php

$t = time();
echo "{$t} <br>";
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
$d_string = $d_obj->format(DATE_ATOM);
echo "{$d_string} <br>";
$d_string = (new DateTime())->format("Y-m-d H:i:s");
echo "{$d_string} <br>";
echo "<br>";

//
$d_obj = new DateTimeImmutable();
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";





