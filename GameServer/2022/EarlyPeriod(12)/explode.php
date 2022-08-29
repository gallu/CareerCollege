<?php   // explode.php

$s = "1,2,3,4";
var_dump($s);
echo "<br>";

$r = explode(",", $s);
var_dump($r);
echo "<br>";

//
$s = "2d6";
$r = explode("d", $s);
var_dump($r);
echo "<br>";
