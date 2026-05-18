<?php  // bmi.php

$height = 170;
$weight = 60;

// 身長をm換算にする
$height_m = $height / 100;

// BMI ＝ 体重kg ÷ (身長m)2
$bmi = $weight / ($height_m ** 2);
// var_dump($bmi);

echo "あなたのBMIは {$bmi} です。<br>";

echo "日本肥満学会の判定基準<br>";

if ($bmi < 18.5) {
    // 18.5未満	低体重(痩せ型)
    echo "低体重(痩せ型)";
} elseif ($bmi < 25) {
    // 18.5〜25未満	普通体重
    echo "普通体重";
}

// 25〜30未満	肥満(1度)
// 30〜35未満	肥満(2度)
// 35〜40未満	肥満(3度)
// 40以上	肥満(4度)
