<?php  // dice.php
// https://dev2.m-fr.net/アカウント名/dice.php

function dice($base_string) {
    // var_dump($base_string);
    // 大文字のDで入ってきたときに、小文字のdに揃える
    $base_string = strtolower($base_string);

    // d6とかで入ってきたら先頭に1を付けておく
    if ("d" === $base_string[0]) {
        $base_string = "1{$base_string}";
    }

    $parts = explode("d", $base_string);
    // print_r($parts);
    // var_dump($parts);

    $times = (int)$parts[0]; // 繰り返す回数
    $dice_type = (int)$parts[1]; // 振るダイスのタイプ

    $total = 0; // 初期化
    for ($i = 0; $i < $times; ++$i) {
        $total += random_int(1, $dice_type);
    }

    return $total;
}

// dice関数を呼び出す
/*
$r = dice("1d4");
var_dump($r);
$r = dice("3d6");
var_dump($r);
$r = dice("5d10");
var_dump($r);
$r = dice("d6");
var_dump($r);
$r = dice("2D6");
var_dump($r);
*/