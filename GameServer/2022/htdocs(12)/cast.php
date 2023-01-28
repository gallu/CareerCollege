<?php   // cast.php

$number = "123";
var_dump($number);
echo "<br>";

//
$numeric_1 = (int) $number;
var_dump($numeric_1);
echo "<br>";

//
$numeric_2 = intval($number);
var_dump($numeric_2);
echo "<br>";

//
$numeric_ng = intval("1a2b3c");
var_dump($numeric_ng);
echo "<br>";

