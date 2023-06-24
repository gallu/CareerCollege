<?php  // func2.php
declare(strict_types=1);

function hoge(int $num1, int $num2 = 10): int {
    var_dump($num1, $num2);
    return $num1 * $num2;
}

hoge(10, 20);

echo "<br>\n";
hoge(999);

// function foo(int $num1, int $num2, int $num3 = 0) {
// function foo(int $num1, int $num2 = 0, int $num3 = 0) {
function foo(int $num1 = 0, int $num2 = 0, int $num3 = 0) {
// function foo(int $num1, int $num2 = 0, int $num3) { //　これはダメ
}

