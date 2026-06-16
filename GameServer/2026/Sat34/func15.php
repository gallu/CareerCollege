<?php // func15.php
declare(strict_types=1);

function hoge(callable $fn) {
    return $fn(12, 34);
}

//
$r = hoge(function(int $i, int $j) {
    return $i * $j;
});
echo "{$r} <br>";

//
$r = hoge(function(int $i, int $j) {
    return $i + $j;
});
echo "{$r} <br>";
