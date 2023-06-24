<?php  // array_merge.php

$arr_1 = [1, 2];
$arr_2 = [111, 222, 333];
var_dump($arr_1, $arr_2);

// [1, 2, 111, 222, 333]
$arr = $arr_1 + $arr_2;
var_dump($arr);

$arr = array_merge($arr_1, $arr_2);
var_dump($arr);

$arr = [...$arr_1, ...$arr_2];
var_dump($arr);
