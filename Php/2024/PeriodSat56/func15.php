<?php  // func15.php
declare(strict_types=1);

// 無名関数
$fn = function(int $num): int {
    $k = $num * 2;
    return $k;
};

$r = $fn(10);
var_dump($r);
echo "<br>";

// アロー関数
$fn = fn(int $num): int => $num * 2;
$r = $fn(20);
var_dump($r);
echo "<br>";
