<?php  // add.php

$i = 1 + 2 ;
var_dump($i);
echo "<br>\n";

$i = 3 + "4" ;
var_dump($i);
echo "<br>\n";

$i = "5" + "7" ;
var_dump($i);
echo "<br>\n";

// Warning: A non-numeric value encountered
$i = "5a" + "7" ;
var_dump($i);
echo "<br>\n";

// Fatal error: Uncaught TypeError: Unsupported operand types: string + string in
$i = "x" + "7" ;
var_dump($i);
echo "<br>\n";
