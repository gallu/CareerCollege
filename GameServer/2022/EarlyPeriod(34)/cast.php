<?php   // cast.php
//
$num_str = "123";
$num_str_2 = "ABC";
var_dump($num_str);
echo "<br>";

//
$num_1 = (int) $num_str;
var_dump($num_1);
echo "<br>";
//
$num_1 = (int) $num_str_2;
var_dump($num_1);
echo "<br>";

//
$num_2 = intval($num_str);
var_dump($num_2);
echo "<br>";
//
$num_2 = intval($num_str_2);
var_dump($num_2);
echo "<br>";

// これはちょっと微妙...
$num_3 = $num_str + 0;
var_dump($num_3);
echo "<br>";

