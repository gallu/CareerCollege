<?php  // zeller.php
// https://ja.wikipedia.org/wiki/%E3%83%84%E3%82%A7%E3%83%A9%E3%83%BC%E3%81%AE%E5%85%AC%E5%BC%8F
function zeller($year, $month, $day) {
    // 1月と2月の処理
    if (($month === 1)||($month === 2)) {
        $year --;
        $month += 12;
    }
    
    // 計算
    $h = (
        $year 
        + floor($year / 4)
        - floor($year / 100)
        + floor($year / 400)
        + floor( (13*$month+8) / 5 )
        + $day
    ) % 7;

    $weeks = [
        "日",
        "月",
        "火",
        "水",
        "木",
        "金",
        "土",
    ];
    // return $h;
    return $weeks[$h];
}
$r = zeller(1970, 11, 25);
var_dump($r);
// 0
$r = zeller(2023, 12, 31);
var_dump($r);
// 1
$r = zeller(1, 1, 1);
var_dump($r);
