<?php  // bmi.php

$height = 170.5; // 身長
$weight = 150; // 体重

// 身長の単位をcmからmに変換
$height_m = $height / 100;

// BMI ＝ 体重kg ÷ (身長m)2
// $bmi = $weight / ($height_m * $height_m);
$bmi = $weight / ($height_m ** 2);
var_dump($bmi);

// https://keisan.site/exec/system/1161228732
// 日本肥満学会の判定基準
if ($bmi < 18.5) {
    $judgement = "低体重(痩せ型)";
} elseif ($bmi < 25) {
    $judgement = "普通体重";
} elseif ($bmi < 30) {
    $judgement = "肥満(1度)";
} elseif ($bmi < 35) {
    $judgement = "肥満(2度)";
} elseif ($bmi < 40) {
    $judgement = "肥満(3度)";
} else {
    $judgement = "肥満(4度)";
}

var_dump($judgement);

