<?php  // func7.php
declare(strict_types=1);

$func = function(int $num1, int $num2): int {
    return $num1 * $num2;
};
$r = $func(2, 3);
var_dump($r);


$func = fn($num1, $num2) => $num1 * $num2;
$r = $func(3, 4);
var_dump($r);
