<?php  // func3.php

/*
・関数名: mul
・引数: 2つ
    $i
    $j
・処理内容
    二つの引数を乗算(掛け算)する
・戻り値
    掛け算した結果
 */
function mul($i, $j) {
    $k = $i * $j;
    return $k;

    // return $i * $j;
}
//
$r = mul(2, 4);
var_dump($r);
echo "<br>";


/*
・関数名: evenOdd
・引数: 1つ
    $i
・処理内容
    なし
・戻り値
    引数の値が偶数なら "even"を返す
    引数の値が奇数なら "odd"を返す
 */
function evenOdd($i) {
    // if ( ($i & 1) === 0) {
    if ($i % 2 === 0) {
        $r = "even";
    } else {
        $r = "odd";
    }

    return $r;
}
$r = evenOdd(1);
var_dump($r);
echo "<br>";

$r = evenOdd(2);
var_dump($r);
echo "<br>";


/*
・関数名: calTax
・引数: 1つ
    $i
・処理内容
    消費税の計算をする
        税率は10%
        端数処理は「しない」
・戻り値
    消費税額を返す: 引数で100が入ってきたら、10を返す
 */
function calTax($i) {
    $tax = $i * 0.1;

    return $tax;
}
//
$r = calTax(100);
var_dump($r);
echo "<br>";

$r = calTax(123456);
var_dump($r);
echo "<br>";
