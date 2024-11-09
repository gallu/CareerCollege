<?php  // arr4.php

$arr = [1, 2, 3];
print_r($arr);

$arr[] = 4;
print_r($arr);

$arr[4] = 5;
print_r($arr);

$arr[6] = 6;
print_r($arr);

$arr = [
    0 => 1,
    1 => 2,
    2 => 3,
];
print_r($arr);

$arr = [
    2 => 3,
    5 => 6,
    1 => 2,
    0 => 1,
];
print_r($arr);
