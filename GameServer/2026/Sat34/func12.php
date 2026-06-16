<?php  // func12.php
declare(strict_types=1);

function hoge(int $price, int $num, float $tax_rate) {
    $tax = $price * $num * $tax_rate;
    echo "{$tax} <br>";
}
//
// hoge(); // Fatal error: Uncaught ArgumentCountError: Too few arguments to function hoge(), 0 passed in
hoge(100, 5, 0.1, true); // エラーにならない

function foo(int $price, int $num = 1, float $tax_rate = 0.1) {
    $tax = $price * $num * $tax_rate;
    echo "{$tax} <br>";
}
//
foo(98);
foo(98, tax_rate:0.08);

