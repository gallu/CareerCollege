<?php  // func2.php
declare(strict_types=1);

function hoge(int $num1, int $num2 = 5): int {
    var_dump($num1, $num2);
    $r = $num1 * $num2;
    return $r;
}

hoge(10, 20);
hoge(999);

// あり
// function hoge(int $num1, int $num2, int $num3 = 0) {
// function hoge(int $num1, int $num2 = 0, int $num3 = 0) {
// function hoge(int $num1 = 0, int $num2 = 0, int $num3 = 0) {

//　なし
// function hoge(int $num1 = 0, int $num2 = 0, int $num3) {
// function hoge(int $num1 = 0, int $num2, int $num3 = 0) {

