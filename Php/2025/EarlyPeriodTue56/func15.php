<?php  // func15.php
declare(strict_types=1);

function hoge(int $i): int {
    return $i * 2;
}
$r = hoge(12);
var_dump($r);
echo "<br>";

// 可変関数
$fn = 'hoge';
$r = $fn(10);
var_dump($r);
echo "<br>";

// 無名関数
$fc = function(int $i) {
    return $i * 3;
};
$r = $fc(12);
var_dump($r);
echo "<br>";

// アロー関数
$ar = fn($i) => $i * 4;
$r = $ar(12);
var_dump($r);
echo "<br>";


