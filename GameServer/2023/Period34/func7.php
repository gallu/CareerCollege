<?php  // func7.php
declare(strict_types=1);

$func = function(int $num1, int $num2): int {
    return $num1 * $num2;
};

$r = $func(10, 20);
var_dump($r);


$func2 = fn($i , $j) => $i * $j;
$r = $func2(20, 20);
var_dump($r);

