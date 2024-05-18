<?php  // func9.php
declare(strict_types=1);

//
function hoge(int|float $i, int|float $j): int|float {
    return $i * $j;
}

$r = hoge(12, 34);
var_dump($r);

$r = hoge(1.23, 4.56);
var_dump($r);
