<?php  // func6.php
declare(strict_types=1);

function add(int|float $i, int|float $j): int|float {
    $r = $i + $j;
    return $r;
}

$r = add(1.2, 3.4);
var_dump($r);

$r = add(12, 34);
var_dump($r);

$r = add(12, 3.4);
var_dump($r);
