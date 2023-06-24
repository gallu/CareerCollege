<?php  // tax.php

/*
calculate tax 
calculate_tax   スネークケース（へび）
calculateTax    キャメルケース（らくだ）　lowerキャメル
CalculateTax    キャメルケース（らくだ）　upperキャメル
*/
// 消費税を計算
function calculateTax($price, $reduced_rate_flag) {
    if ($reduced_rate_flag === true) {
        // 軽減税率適用
        // $tax = $price * 0.08;
        $p = 0.08;
    } else {
        //　普通の税率
        // $tax = $price * 0.1;
        $p = 0.1;
    }
    $tax = $price * $p;
    $tax = floor($tax); //　端数は切り捨てる
    return $tax;
}

$r = calculateTax(988, false);
echo "tax is {$r} <br>\n";

$r = calculateTax(988, true);
echo "reduced tax is {$r} <br>\n";

