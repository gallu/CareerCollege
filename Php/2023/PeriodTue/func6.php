<?php   // func6.php
declare(strict_types=1);

$add = function(int|float $i, int|float $j): int|float {
    return $i + $j;
};
var_dump( $add(10, 20) );
var_dump( $add(3.14, 1.4142) );

// アロー関数
// $add = fn(int|float $i, int|float $j): int|float => $i + $j;
$add = fn($i, $j) => $i + $j;
var_dump( $add(10, 20) );
var_dump( $add(3.14, 1.4142) );

