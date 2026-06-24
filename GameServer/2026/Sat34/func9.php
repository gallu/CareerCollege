<?php  // func9.php
declare(strict_types=1);

function add(int $i, int $j): int {
    $r = $i + $j;
    return $r;
}

$r = add(1, 2);
echo "r is {$r} <br>";

// $r = add(1, "abc"); // Fatal error: Uncaught TypeError: add(): Argument #2 ($j) must be of type int, string given, called in
// echo "r is {$r} <br>";

// $r = add(1, "22");
// echo "r is {$r} <br>"; // Fatal error: Uncaught TypeError: add(): Argument #2 ($j) must be of type int, string given, called in
