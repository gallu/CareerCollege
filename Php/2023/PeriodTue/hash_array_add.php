<?php  // hash_array_add.php

$arr = ['key1' => 1, 'key2' => 2];
$arr_2 = ['key2' => 222, 'key3' => 333];

//
$arr_total = $arr + $arr_2;
var_dump($arr_total);

$arr_total = array_merge($arr, $arr_2);
var_dump($arr_total);

$arr_total = [...$arr, ...$arr_2];
var_dump($arr_total);
