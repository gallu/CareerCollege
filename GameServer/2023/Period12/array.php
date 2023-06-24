<?php  // array.php

$arr = [];
print_r($arr);
var_dump($arr);

$arr = [10, 11, 9, 10];
print_r($arr);
var_dump($arr);

$arr[] = 22;
print_r($arr);
var_dump($arr);

$num = $arr[2];
echo "num is {$num} <br> \n";

$count = count($arr);
echo "count is {$count} <br>\n";

