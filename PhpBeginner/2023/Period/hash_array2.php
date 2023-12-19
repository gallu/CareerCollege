<?php  // hash_array2.php

$awk = [
    "name" => "hoge",
    "age" => 18,
];
// var_dump($awk);
print_r($awk);

$awk2 = [
    "address" => "jpn",
    "age" => 999,
];
print_r($awk2);

$awk_add = $awk + $awk2;
print_r($awk_add);

$awk_add_r = $awk2 + $awk;
print_r($awk_add_r);

$awk_merge = array_merge($awk, $awk2);
print_r($awk_merge);

$awk_3dot = [...$awk, ...$awk2];
print_r($awk_3dot);
