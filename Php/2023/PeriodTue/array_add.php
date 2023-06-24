<?php  // array_add.php

$arr = [1, 2];
$arr_2 = [44, 55, 66];
// var_dump($arr, $arr_2);

// [1, 2, 44, 55, 66]

$arr_total = $arr + $arr_2; // 使えない……
var_dump($arr_total);

$arr_total = array_merge($arr, $arr_2);
var_dump($arr_total);

$arr_total = [...$arr, ...$arr_2];
var_dump($arr_total);
