<?php  // arr2.php

// 空配列
$arr = [];
var_dump($arr);
print_r($arr);

//
$arr[] = "1st";
$arr[] = "2nd";
$arr[] = "3rd";
var_dump($arr);
print_r($arr);

//
$arr[0] = "111st";
$arr[5] = "5th";
var_dump($arr);
print_r($arr);

