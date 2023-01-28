<?php   // array2.php
declare(strict_types=1);

//
$awk = [1, '2nd', 3.14];
foreach($awk  as  $k => $v) {
    echo "{$k} : {$v} <br> ";
}

//
$awk2 = [1, 2, 3];
foreach($awk2 as $k => $v) {
    $v *= 2;
}
var_dump($awk2);

//
$awk2 = [1, 2, 3];
foreach($awk2 as $k => $v) {
    $awk2[$k] = $v * 2;
}
var_dump($awk2);

// 基本「やめとけ」
$awk2 = [1, 2, 3];
foreach($awk2 as $k => &$v) {
    $v *= 3;
}
var_dump($awk2);
unset($v); // 事故防止
$v = 999;
var_dump($awk2);

//
$awk2 = [1, 2, 3];
$awk3 = array_map(function($num) {
    return $num * 3;
}, $awk2);
var_dump($awk3);
