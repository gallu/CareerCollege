<?php  // op4.php

$a = 0b1111;
$b = 0b1100;
$c = 0b1010;
$d = 0b0101;
$z = 0b0000;

// and
$bit = $a & $b;
echo decbin($a), " & ", decbin($b), " = ", decbin($bit), "<br>";
//
$bit = $a & $z;
echo decbin($a), " & ", decbin($z), " = ", decbin($bit), "<br>";
//
$bit = $b & $c;
echo decbin($b), " & ", decbin($c), " = ", decbin($bit), "<br>";
//
$bit = $c & $d;
echo decbin($c), " & ", decbin($d), " = ", decbin($bit), "<br>";


// or
$bit = $a | $b;
echo decbin($a), " | ", decbin($b), " = ", decbin($bit), "<br>";
//
$bit = $a | $z;
echo decbin($a), " | ", decbin($z), " = ", decbin($bit), "<br>";
//
$bit = $b | $c;
echo decbin($b), " | ", decbin($c), " = ", decbin($bit), "<br>";
//
$bit = $c | $d;
echo decbin($c), " | ", decbin($d), " = ", decbin($bit), "<br>";

