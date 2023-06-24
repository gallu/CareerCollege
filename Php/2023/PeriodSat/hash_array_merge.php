<?php  // hash_array_merge.php

$arr_1 = ['key1' => 1, 'key2' => 2];
$arr_2 = ['key2' => 222, 'key3' => 333];

$arr = $arr_1 + $arr_2;
var_dump($arr);

$arr = array_merge($arr_1, $arr_2);
var_dump($arr);

$arr = [...$arr_1, ...$arr_2];
var_dump($arr);
