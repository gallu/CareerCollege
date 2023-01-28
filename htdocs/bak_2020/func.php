<?php  // func.php

function hoge($ii) {
    $ii += 10;
    return $ii;
}
//
$i = 0;
$j = hoge($i);
echo "i:{$i}, j:{$j}<br>\n";
//
$j = HOGE(20);
echo "j:{$j}<br>\n";
// 
$fn = function ($i, $j) {
    return $i * $j;
};
$j = $fn(2, 3);
echo "j:{$j}<br>\n";

//
$awk = [1, 2, 3, 4];
function f($i) {
    return $i * 2;
}
$awk2 = array_map('f', $awk);
var_dump($awk2);
//
$awk3 = array_map(function($i) {
    return $i * 3;
}, $awk);
var_dump($awk3);













