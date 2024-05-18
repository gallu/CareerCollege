<?php  // arr.php

$arr_1 = [1, 2, 3];
$arr_2 = [111, 222, 333];

var_dump($arr_1, $arr_2);

//
$arr = $arr_1 + $arr_2;
var_dump($arr);

//
$arr = array_merge($arr_1, $arr_2);
var_dump($arr);

//
$arr = [...$arr_1, ...$arr_2];
var_dump($arr);
