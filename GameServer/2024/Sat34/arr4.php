<?php  // arr4.php

$arr = [];
$arr[2] = 222;
$arr[0] = 0;
$arr[1] = 11;

print_r($arr);
echo "<br>";

$arr["key 1"] = "val 1";
$arr["key 2"] = "val 2";

print_r($arr);
echo "<br>";

$arr = [];
$arr[1.23] = 111;
print_r($arr);
echo "<br>";

$arr["1"] = "str 111";
$arr["01"] = "str 0101";
print_r($arr);
echo "<br>";









