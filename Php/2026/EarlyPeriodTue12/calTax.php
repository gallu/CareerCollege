<?php  // calTax.php

// 消費税計算
function calculateConsumptionTax($price) {
    $tax = floor($price * 0.1); // 価格(引数)の10%(端数切捨て)
    return $tax;
}

$r = calculateConsumptionTax(1000);
var_dump($r);

$r = calculateConsumptionTax(998);
var_dump($r);

