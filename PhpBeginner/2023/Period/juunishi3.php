<?php  // juunishi3.php

$year = 2023;
echo "{$year}年は";

$eto = $year % 12;

$ewto_array = [
    0 => "申",
    1 => "酉",
    2 => "戌",
    3 => "亥",
    4 => "子",
    5 => "丑",
    6 => "寅",
    7 => "卯",
    8 => "辰",
    9 => "巳",
    10 => "午",
    11 => "未",
];
echo " {$ewto_array[$eto]} です！！";
