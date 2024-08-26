<?php  // Q1.php

/*
「自分の名前」を出力するコードを書きなさい。
 */
echo "古庄道明 <br>";

/*
12345 を7で割ったあまり、を出力するコードを書きなさい。
 */
$m = 12345 % 7;
echo "{$m} <br>"; 

/*
$heightに170が入ってます。170cm、というデータです。
これを「メートル」で表示してください。 1.7 という出力を期待しています。
 */
$height = 170;
echo $height / 100, "<br>";

$height_m = $height / 100;
echo "{$height_m} <br>";

/*
BMIを計算します。
$heightに身長（cm)、$weightに体重(kg)が入っているとします。
計算式は以下です。
 体重kg ÷ (身長m)2
 */
$height = 170;
$weight = 60;

$height_m = $height / 100;

$bmi = $weight / ($height_m ** 2);
$bmi = $weight / ($height_m * $height_m);
//
$bmi = $weight / (($height / 100) ** 2);

echo "{$bmi} <br>";

/*
「適正体重」を計算しなさい。

適正体重 ＝ (身長m)2 ×22
 */
$height_m = $height / 100;
$ideal = ($height_m ** 2) * 22;
echo "適正体重: {$ideal} <br>";

$適正体重 = ($height_m ** 2) * 22;
echo "適正体重: {$適正体重} <br>";





