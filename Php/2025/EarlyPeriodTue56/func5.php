<?php  // func5.php
/*
以下の関数を作成しなさい。

関数名: commission
引数: $price
処理:
    引数 $priceの15%(端数切捨て)の計算をする
戻り値: 上述計算の結果

作った関数を使って「priceが1500円」の時の計算結果をvar_dump
で出力しなさい。
*/

function commission($price) {
    /*
    // $priceの15%
    $r = $price * 0.15;
    // (端数切捨て)の計算をする
    $r = floor($r);

    return $r;
    */
    // $priceの15%(端数切捨て)の計算をする
    return floor($price * 0.15);
}

$r = commission(1500);
var_dump($r);
