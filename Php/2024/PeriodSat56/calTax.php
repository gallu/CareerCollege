<?php  // calTax.php

/*
・関数名: calTax
・引数: 1つ
    $i
・処理内容
    消費税の計算をする
        税率は10%
        端数処理は「小数点以下切り捨て」
・戻り値
    消費税額を返す: 引数で100が入ってきたら、10を返す
 */
function calTax($i) {
    $tax = $i * 0.1;
    $tax = floor($tax);
    return $tax;

    // return floor($i * 0.1);
}
//
$r = calTax(98);
var_dump($r);
echo "<br>";

/*
 * 「98円の商品を5個」の消費税額を計算してください
 * 消費税の計算は「1個の商品毎」にcalTaxをcallして計算しなさい
 */
$r = calTax(98) + calTax(98) + calTax(98) + calTax(98) + calTax(98);

$r = calTax(98) * 5;

$r = 0;
for ($i = 0; $i < 5; ++$i) {
    $r += calTax(98);
}

$r = 0;
$cart = [98,98,98,98,98];
foreach($cart as $p) {
    $r += calTax($p);
}

var_dump($r);
echo "<br>";

/*
 * 「98円の商品を5個」の消費税額を計算してください
 * 消費税の計算は「商品の合計額」にcalTaxをcallして計算しなさい
 */
$r = calTax(98 * 5);

var_dump($r);
echo "<br>";
