<?php  // func11.php

function hoge() {
    echo __FUNCTION__, "<br>";
}

hoge();

// 可変関数
$fn = "hoge";
$fn();

// 無名関数
$ano = function() {
    echo __FUNCTION__ , "<br>";
};
$ano();

//
$fn = function(int $i, int $j): int {
    return $i * $j;
};
$r = $fn(12, 34);
var_dump($r);
echo "<br>";

// アロー関数
$fn = fn(int $i, int $j):int => $i * $j;
$r = $fn(12, 34);
var_dump($r);
echo "<br>";
