<?php  // func1.php

echo "<pre>";

/*
$price = 1000;
$tax = $price * (10 / 100);
var_dump($tax);

$price = 98;
$tax = $price * (10 / 100);
$tax_f = floor($tax);
var_dump($tax, $tax_f);

$price = 49;
$tax = $price * (10 / 100);
$tax_f = floor($tax);
var_dump($tax, $tax_f);
*/

/*
// 関数を定義する(関数を切る)
function 関数名($引数) {
    処理
    処理
    処理

    return 戻り値;
}
// 関数を使う
関数名(...);
$戻り値 = 関数名(...);
*/

//
function calTax($price) {
    $tax = $price * (10 / 100);
    $tax_f = floor($tax);
    // var_dump($tax, $tax_f);

    return $tax_f;
}

$tax = calTax(1000);
var_dump($tax);

$tax = calTax(98);
var_dump($tax);

$tax = calTax(49);
var_dump($tax);

