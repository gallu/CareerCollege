<?php  // func2.php
/*
関数名: calculateTax
引数: 値段(price)
処理: 引数の「値段」を1.1倍して、端数を切り上げる
戻り値: 処理の結果(端数切り上げた値)
*/
// 消費税計算
function calculateTax($price) {
    $with_tax = $price * 1.1;
    // $with_tax = floor($with_tax); // 端数切捨て
    $with_tax = ceil($with_tax); // 端数切り上げ
    
    return $with_tax;
}

//
$r = calculateTax(1000);
var_dump($r);

$r = calculateTax(998);
var_dump($r);
