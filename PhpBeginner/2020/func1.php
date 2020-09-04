<?php  // func1.php
//   http://dev2.m-fr.net/アカウント名/func1.php

// 消費税計算
function calTax($price) {
    // 処理
    $tax = intval(($price * 10) / 100 );
    return $tax;
}

//
var_dump( calTax(100) );
var_dump( calTax(500) );
var_dump( calTax(1980) );
var_dump( calTax(198) );



