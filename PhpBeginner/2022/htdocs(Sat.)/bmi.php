<?php   // bmi.php

require_once("common.php");

//var_dump($_POST);

/**
 * 「日本肥満学会の判定基準」の取得
 */
function getCriterionJapan(float $bmi) : string {
    //
    if ($bmi < 18.5) {
        return "低体重(痩せ型)　";
    } else if ($bmi < 25) {
        return "普通体重";
    } else if ($bmi < 30) {
        return "肥満(1度)";
    } else if ($bmi < 35) {
        return "肥満(2度)";
    } else if ($bmi < 40) {
        return "肥満(3度)";
    } else {
        return "肥満(4度)";
    }
}

/**
 * 基礎代謝の計算
 */
function calculationBasalMetabolism(float $height, float $weight, int $age, string $gender) : float {
    //
    if ($gender === "man") {
        // 男性： 13.397×体重kg＋4.799×身長cm−5.677×年齢+88.362
        $basal_metabolis = 13.397 * $weight + 4.799 * $height - 5.677 * $age + 88.362;
    } else {
        // 女性： 9.247×体重kg＋3.098×身長cm−4.33×年齢+447.593
        $basal_metabolis = 9.247 * $weight + 3.098 * $height - 4.33 * $age + 447.593;
    }
    // 小数点以下切り捨て
    $basal_metabolis = round($basal_metabolis);
    return $basal_metabolis;
}

/**
 * 適正体重の計算
 */
function calculationAppropriateWeight(float $height) : float {
    // 身長の単位をcmからmにする
    //$height = $height / 100;
    $height /= 100;

    // 適正体重 ＝ (身長m)2 ×22
    $appropriate_weight = ($height ** 2) * 22;
    
    // 小数点以下第一位までにしておく
    $appropriate_weight = round($appropriate_weight, 1);

    return $appropriate_weight;
}

/**
 * BMIの計算
 */
function calculationBmi(float $height, float $weight) : float {
    // 身長の単位をcmからmにする
    //$height = $height / 100;
    $height /= 100;

    // BMI ＝ 体重kg ÷ (身長m)2
    //$bmi = $weight / ($height * $height);
    //$bmi = $weight / pow($height, 2);
    $bmi = $weight / ($height ** 2);
    
    // 小数点以下第二位までにしておく
    $bmi = round($bmi, 2);

    return $bmi;
}

// 身長、体重、年齢、性別の取得
$height = floatval($_POST['height'] ?? 0);
$weight = floatval($_POST['weight'] ?? 0);
$age    = intval($_POST['age'] ?? 0);
$gender = $_POST['gender'] ?? "";
//var_dump($height, $weight, $age, $gender);

// validationをする
$error_message = [];
//
if (0.0 === $height) {
    $error_message[] = "身長を入力してください";
}
if (0.0 === $weight) {
    $error_message[] = "体重を入力してください";
}
if ( ("man" !== $gender)&&("woman" !== $gender) ) {
    $error_message[] = "性別を正しく入力してください";
}
//
if ([] !== $error_message) {
    var_dump($error_message);
    exit;
}

// BMIの計算
$bmi = calculationBmi($height, $weight);
//var_dump($bmi);
// 「日本肥満学会の判定基準」の取得
$criterion_japan = getCriterionJapan($bmi);


// 適正体重の計算
$appropriate_weight = calculationAppropriateWeight($height);
//var_dump($appropriate_weight);

// 基礎代謝の計算
$basal_metabolism = calculationBasalMetabolism($height, $weight, $age, $gender);
//var_dump($basal_metabolism);

// 出力
?><!doctype html>
BMI: <?php  echo h( strval($bmi) ); ?><br>
->日本肥満学会基準: <?php  echo h($criterion_japan); ?><br>
適正体重: <?php  echo h( strval($appropriate_weight) ); ?>kg<br>
基礎代謝: <?php  echo h( strval($basal_metabolism) ); ?>kcal<br>

