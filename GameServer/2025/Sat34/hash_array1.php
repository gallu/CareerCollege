<?php  // hash_array1.php

echo "<pre>";

// 基本
$awk = [
    "HP" => 100,
    "MP" => 150,
    "STR" => 10,
    "DEX" => 12,
];
print_r($awk);

// 古い書き方
$awk = array(
    "HP" => 100,
    "MP" => 150,
    "STR" => 10,
    "DEX" => 12,
);
print_r($awk);

