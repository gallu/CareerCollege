<?php  // func4.php

function consumptionTax($price) {
    $tax = $price * 0.1;
    $tax = floor($tax); // 端数は切り捨てる
    return $tax;
}

$tax = consumptionTax(98);
var_dump($tax);
