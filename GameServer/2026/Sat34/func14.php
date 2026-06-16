<?php  // func14.php
declare(strict_types=1);

function hoge(int $i, int $j): int {
    return $i * $j;
}
//
$r = hoge(12, 34);
echo "{$r} <br>";

// 可変関数
$fn = "hoge";
$r = $fn(22, 33);
echo "{$r} <br>";

// 無名関数
$fn = function(int $i, int $j): int {
    return $i ** $j;
};
$r = $fn(22, 3);
echo "{$r} <br>";

// アロー関数
$fn = fn(int $i, int $j): int => $i ** $j;
$r = $fn(11, 3);
echo "{$r} <br>";
