<?php  // union.php

function add(int|float $i, int|float $j): int|float {
    var_dump($i, $j);
    return $i + $j;
}
$r = add(1, 2);
var_dump($r);

$r = add(1, 2.34);
var_dump($r);
