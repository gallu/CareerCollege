<?php  // calendar.php
// https://dev2.m-fr.net/アカウント名/calendar.php

require_once __DIR__ . "/getLastDayOfMonth.php";
require_once __DIR__ . "/dayOfWeekByZeller.php";

//
$year = (int)($_GET["y"] ?? 2026);
$month = (int)($_GET["m"] ?? 1);
// var_dump($year, $month);

// ごく軽くvalidate + α
if ($year === 0) {
    // 西暦0年はないので補正しておく(負の値は紀元前なのでそのまま)
    $year = 1;
}
// 月は1～12の間に補正しておく
if ( ($month < 1)||($month > 12) ) {
    $month = 1;
}

// 前月の計算
$before_year = $year;
$before_month = $month - 1;
if ($before_month === 0) {
    $before_year = $year - 1;
    $before_month = 12;
}

// 翌月の計算
$after_month = $month + 1;
$after_year = $year;
if ($after_month === 13) {
    $after_year = $year + 1;
    $after_month = 1;
}

//
echo "<a href='./calendar.php?y={$before_year}&m={$before_month}'>前月</a> | ";
echo "<a href='./calendar.php?y={$after_year}&m={$after_month}'>翌月</a>";
echo "<br>";

//
echo "<h1>{$year}年 {$month}月のカレンダー</h1>";

// 晦日の判定
$last_day = getLastDayOfMonth($year, $month);
// var_dump($last_day);

echo "<table border='0'><tr>";
for ($day = 1; $day <= $last_day; ++$day) {
    $week = dayOfWeekByZellerToString($year, $month, $day);

    if ($week === "土") {
        $style = "color: blue;";
    } elseif ($week === "日") {
        $style = "color: red;";
    } else {
        $style = "";
    }
    echo "<td style='{$style}'>{$day}({$week})";
    
    if ($day === 15) {
        echo "<tr><td>";
    }
}
