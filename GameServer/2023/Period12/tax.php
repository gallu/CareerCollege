<?php  // tax.php
/*
calculation tax 

// スネークケース(へび)
calculation_tax 

// キャメルケース(ラクダ)
calculationTax // lowerキャメル
CalculationTax // upperキャメル
*/

// 消費税計算
function calculationTax($price, $reducedFlag) {
    /*
    if ($reducedFlag === true) {
        $ret = $price * 0.08; // 8%
    } else {
        $ret = $price * 0.10; // 10%
    }
    */
    if ($reducedFlag === true) {
        $p = 0.08; // 8%
    } else {
        $p = 0.1; // 8%
    }
    $ret = $price * $p;
    $ret = floor($ret); // 今回は「端数切捨て」
    return $ret;
}

$tax = calculationTax(998, true);
var_dump($tax);

$tax = calculationTax(998, false);
var_dump($tax);
