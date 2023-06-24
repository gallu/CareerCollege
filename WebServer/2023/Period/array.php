<?php  // array.php

$arr = [1, '2nd', 3.14, true, null];
foreach($arr as $k => $v) {
	echo "{$k}:";
	var_dump($v);
}

$arr[] = 'add';
var_dump($arr);

//
$arr_1 = [1, 2, 3];
$arr_2 = [11, 22, 33];
$arr_add = [...$arr_1, ...$arr_2];
var_dump($arr_add);
