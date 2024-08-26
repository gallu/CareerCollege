<?php  // Q4.php

/*
12345 を7で割ったあまり、を出力するコードを書きなさい。
 */
$m = 12345 % 7;
echo "{$m} <br> \n";

/*
$heightに170が入ってます。170cm、というデータです。
これを「メートル」で表示してください。 1.7 という出力を期待しています。
 */
$height = 170;

$height_m = $height / 100;
echo "{$height_m} <br> \n";

echo $height / 100 , "<br> \n";

/*
BMIを計算します。
$heightに身長（cm)、$weightに体重(kg)が入っているとします。
計算式は以下です。
 体重kg ÷ (身長m)2
 */
$height = 170;
$weight = 60;

$height_m = $height / 100;
$bmi = $weight  / ($height_m ** 2);

echo "BMI is {$bmi} <br> \n";

/*
「適正体重」を計算しなさい。
適正体重 ＝ (身長m)2 ×22
 */
$height = 170;

$適正体重 = (($height / 100) ** 2) * 22;
echo "適正体重 {$適正体重} <br> \n";

/*
基礎代謝量の計算をしなさい。
男性： 13.397×体重kg＋4.799×身長cm−5.677×年齢+88.362
 */
$height = 170;
$weight = 83;
$age = 53;

$metabolism = 13.397 * $weight + 4.799 * $height - 5.677 * $age + 88.362;
echo "基礎代謝量 {$metabolism} <br> \n";





