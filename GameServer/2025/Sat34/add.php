<?php  // add.php

$i = 1 + 2;
var_dump($i);

$i = 3 + "4";
var_dump($i);

$i = "5" + "6";
var_dump($i);

// Warning: A non-numeric value encountered in
$i = "7a" + "8";
var_dump($i);

// Fatal error: Uncaught TypeError: Unsupported operand types: string + string in 
$i = "9" + "X";
var_dump($i);
