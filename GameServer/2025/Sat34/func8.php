<?php  // func8.php
declare(strict_types=1);

function hoge(int $num, float $rate) {
    var_dump($num, $rate);
}

hoge(123, 3.14);
echo "<br>";

// hoge(123); // Uncaught ArgumentCountError: Too few arguments to function hoge(), 1 passed
// echo "<br>";

hoge(123, 3.14, "hoge");
echo "<br>";
// abs(12, 34); // Uncaught ArgumentCountError: abs() expects exactly 1 argument, 2 given 

function foo(int $num, float $rate = 0.1) {
    var_dump($num, $rate);
}

foo(123, 3.14);
echo "<br>";

foo(456);
echo "<br>";


