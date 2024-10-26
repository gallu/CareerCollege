<?php  // arr_add2.php

$arr_1 = [
	'1st' => 1,
	'2nd' => 2,
];
$arr_2 = [
	'2nd' => 222,
	'3rd' => 333,
];
var_dump($arr_1, $arr_2);

//
$arr_add_1 = $arr_1 + $arr_2;
var_dump($arr_add_1);

//
$arr_add_2 = array_merge($arr_1, $arr_2);
var_dump($arr_add_2);

//
$arr_add_3 = [...$arr_1, ...$arr_2];
var_dump($arr_add_2);