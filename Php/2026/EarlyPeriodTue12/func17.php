<?php  // func17.php
declare(strict_types=1);

$arr1 = [];
$arr2 = new ArrayObject();

//
$arr1[] = 111;
$arr2[] = 111;

var_dump($arr1[0]);
var_dump($arr2[0]);
echo "<br>";

foreach ($arr1 as $k => $v) {
    echo "{$k}: {$v} <br>";
}
foreach ($arr2 as $k => $v) {
    echo "{$k}: {$v} <br>";
}

var_dump($arr1, $arr2);

function hoge(iterable $arr) {
    $arr[] = 999;
}
hoge($arr1);
hoge($arr2);
var_dump($arr1, $arr2);

