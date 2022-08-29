<?php   // explode.php

$s = "1,2,3,4,5";
$awk = explode(",", $s);
var_dump($s);
echo "<br>";
var_dump($awk);
echo "<br><br>";

$s = "1,2,3,4,5";
$awk = explode("-", $s);
var_dump($s);
echo "<br>";
var_dump($awk);
echo "<br><br>";

$s = '2d6';
$awk = explode("d", $s);
var_dump($s);
echo "<br>";
var_dump($awk);
echo "<br><br>";


