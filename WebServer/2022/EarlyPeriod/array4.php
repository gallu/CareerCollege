<?php   // array4.php
declare(strict_types=1);

$awk = [
    0 => 1,
    1 => 2,
    4 => 4,
    'key1' => 'val 1',
    'key2' => 'val 2',
    'key4' => 'val 4',
];
$awk2 = [
    0 => 11,
    1 => 22,
    3 => 33,
    'key1' => 'val 11',
    'key2' => 'val 22',
    'key3' => 'val 33',
];
//
$awk_add_1 = $awk + $awk2;
var_dump($awk_add_1);

//
$awk_add_2 = array_merge($awk, $awk2);
var_dump($awk_add_2);


