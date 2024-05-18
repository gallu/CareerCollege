<?php  // unpacking.php

$arr_1 = [1, 2];
$arr_2 = [3, 4];
$arr = [...$arr_1, ...$arr_2];
var_dump($arr);

$harr_1 = ['a' => 123];
$harr = [...$harr_1, 'b'=>999, ...$arr_2];
var_dump($harr);

function func(int $num, string $str, float $fl) {
    var_dump($num, $str, $fl);
}
$params = [
    'num' => 123,
    'fl' => 3.14,
    'str' => 'hoge',
];
func(...$params);

$params2 = [
    'num' => 123,
    'fl' => 3.14,
];
func(...$params2, str: 'foo');


