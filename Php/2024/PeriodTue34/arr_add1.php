<?php  // arr_add1.php

$arr_1 = [1, 2, 3];
$arr_2 = [7, 8, 9, 10];
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

