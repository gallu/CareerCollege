<?php  // dayOfWeekByZeller.php

// https://ja.wikipedia.org/wiki/%E3%83%84%E3%82%A7%E3%83%A9%E3%83%BC%E3%81%AE%E5%85%AC%E5%BC%8F
// 「コンピュータでの計算」を参考にした
// 曜日	日 	月 	火 	水 	木 	金 	土
// h' 	0 	1 	2 	3 	4 	5 	6
function dayOfWeekByZeller($y, $m, $d) {
    // var_dump($y, $m, $d);

    // 1月と2月は、前年のそれぞれ13月・14月として扱う
    if ($m === 1) {
        $y = $y - 1;
        $m = 13;
    }
    if ($m === 2) {
        $y = $y - 1;
        $m = 14;
    }
    // var_dump($y, $m, $d);

    $h = (
        $y
        + floor($y / 4)
        - floor($y / 100)
        + floor($y / 400)
        + floor((13*$m + 8) / 5)
        + $d
    ) % 7;
    // var_dump($h);

    return $h;
}
// 文字列表現にする
function dayOfWeekByZellerToString($y, $m, $d) {
    // まず計算する
    $h = dayOfWeekByZeller($y, $m, $d);

    // 文字列表現にする
    $weeks = ["日", "月", "火", "水", "木", "金", "土"];
    return $weeks[$h];
}

// テスト
// $w = dayOfWeekByZellerToString(2025, 12, 16);
// var_dump($w);
