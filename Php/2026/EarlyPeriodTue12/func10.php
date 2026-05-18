<?php  // func10.php
declare(strict_types=1);

// function add(int $i, int $j): int {
// function add(float $i, float $j): float {
function add(int|float $i, int|float $j): int|float { // PHP8以降なら
    $total = $i + $j;
    return $total;
}

$r = add(12, 3.14);
var_dump($r);

$r = add(12, 34);
var_dump($r);
