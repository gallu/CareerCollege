<?php  // array3.php
echo "<pre>";

$hash_arr = [
    "str" => 10,
    "dex" => 15,
    "wiz" => 20,
];
print_r($hash_arr);

//
foreach ($hash_arr as $k => $v) {
    // $v *= 2; // これだとダメ
    $hash_arr[$k] = $v * 2;
}
print_r($hash_arr);

$arr = [
    0 => 0,
    1 => 11,
    2 => 222,
    3 => 3333,
];
print_r($arr);

$arr2 = [
    3 => 3,
    1 => 11,
    0 => 0,
    2 => 222,
    99 => 9999,
];
print_r($arr2);
