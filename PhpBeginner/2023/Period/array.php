<?php  // array.php

$arr = ["111", 22, 3];
print_r($arr);
var_dump($arr);

var_dump( $arr[0] );
// var_dump( $arr[10] );

$arr = [];
print_r($arr);
var_dump($arr);

$arr[] = 1;
$arr[] = 22;
$arr[] = 333;
$arr[] = 4444;
print_r($arr);
var_dump($arr);

$count = count( $arr );
var_dump($count);
