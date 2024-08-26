<?php  // cast.php

$v = 123;
var_dump($v);
echo "<br>";

$v = (string)$v;
var_dump($v);
echo "<br>";

$v = (float)$v;
var_dump($v);
echo "<br>";

$v = (array)$v;
var_dump($v);
echo "<br>";

$v = -1;
$v = (bool)$v;
var_dump($v);
echo "<br>";

$v = "2a";
$v = (int)$v;
var_dump($v);
echo "<br>";




