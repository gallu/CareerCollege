<?php   // array.php

//echo  "aaa";

$array_value = [1, "str", 3];
var_dump( $array_value[0] );

//
$array_value_2 = [];
var_dump($array_value_2);
//
$array_value_2[] = 10;
$array_value_2[] = 22;
$array_value_2[] = 33;
var_dump($array_value_2);

$count = count($array_value_2);
var_dump( $count );

