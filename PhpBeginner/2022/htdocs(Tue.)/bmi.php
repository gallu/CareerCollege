<?php    // bmi.php

require_once(__DIR__ . "/common.php");

/**
 * 「日本肥満学会の判定基準」の取得
 *
 * @param float $bmi BMI値
 * @return string 判断基準
 */
function getCriteriaJpn(float $bmi): string {
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
 * BMI値の計算
 *
 * @param float $height 身長(cm)
 * @param float $weight 体重(kg)
 * @return float BMI値
 */
function calculationBmi(float $height, float $weight) : float
{
    // 身長をcmからmに変換する
    //$height = $height / 100;
    $height /= 100;

    // BMI ＝ 体重kg ÷ (身長m)2
    //$bmi = $weight / ($height ** 2);
    //$bmi = $weight / pow($height, 2);
    $bmi = $weight / ($height * $height);

    // 浮動小数点数を第二位で丸める
    $bmi = round($bmi, 2);

    return $bmi;
}

/**
 * 適正体重の計算
 *
 * @param float $height 身長(cm)
 * @return float 適正体重
 */
function calculationAppropriateWeight(float $height) : float {
    // 身長をcmからmに変換する
    //$height = $height / 100;
    $height /= 100;

    // 適正体重 ＝ (身長m)2 ×22
    $appropriate_weight = ($height * $height) * 22;

    // 浮動小数点数を第一位で丸める
    $appropriate_weight = round($appropriate_weight, 1);

    //
    return $appropriate_weight;
}

/**
 * 基礎代謝の計算
 *
 * @param float $height 身長(cm)
 * @param float $weight 体重(kg)
 * @param int $age 年齢
 * @param string $gender 性別
 * @return float 基礎代謝
 */
function calculationBasalMetabolism(float $height, float $weight, int $age, string $gender) : float
{
    if ("male" === $gender) {
        // 男性： 13.397×体重kg＋4.799×身長cm−5.677×年齢+88.362
        $basal_metabolism = 13.397 * $weight + 4.799 * $height - 5.677 * $age + 88.362;
    } else {
        // 女性： 9.247×体重kg＋3.098×身長cm−4.33×年齢+447.593
        $basal_metabolism = 9.247 * $weight + 3.098 * $height - 4.33 * $age + 447.593;
    }

    // 浮動小数点数を丸める
    $basal_metabolism = round($basal_metabolism);

    //
    return $basal_metabolism;
}

// 身長、体重、年齢、性別の取得
/*
$height = $_POST['height'] ?? null;
$weight = $_POST['weight'] ?? null;
$age    = $_POST['age']    ?? null;
$gender = $_POST['gender'] ?? null;
*/
$datum = [];
$params = ['height', 'weight', 'age', 'gender'];
foreach($params as $v) {
    $datum[$v] = $_POST[$v] ?? null;
    //${$k} = $_POST[$k] ?? null; // 使うときは要注意
}
//var_dump($datum);

// 取得したデータのvalidate
$error_messages = [];
if (false === is_numeric($datum['height'])) {
    $error_messages[] = '身長の値は数値でお願いします。';
}
if (0.0 === floatval($datum['height'])) {
    $error_messages[] = '身長の値が０なのは困ります。';
}
if (false === is_numeric($datum['weight'])) {
    $error_messages[] = '体重の値は数値でお願いします。';
}
if (false === is_numeric($datum['age'])) {
    $error_messages[] = '年齢の値は数値でお願いします。';
}
//
if ( ('female' !== $datum['gender'])&&('male' !== $datum['gender']) ) {
    $error_messages[] = '性別を適切に入力してください。';
}
//
if ([] !== $error_messages) {
    echo "エラーがあります。<br>";
    foreach($error_messages as $e) {
        echo $e , "<br>";
    }
    exit;
}

// *** ここまできたらデータはOK！ ****
//echo "データ正常！！";

// 値の型をキャスト
$datum['height'] = floatval($datum['height']);
$datum['weight'] = floatval($datum['weight']);
$datum['age']    = intval($datum['age']);
//var_dump($datum);

// BMIの計算
$bmi = calculationBmi($datum['height'], $datum['weight']);
$criteria_jpn = getCriteriaJpn($bmi);
//var_dump($bmi);

// 適正体重の計算
$appropriate_weight = calculationAppropriateWeight($datum['height']);
//var_dump($appropriate_weight);

// 基礎代謝の計算
$basal_metabolism = calculationBasalMetabolism($datum['height'], $datum['weight'], $datum['age'], $datum['gender']);
//var_dump($basal_metabolism);

/*
https://keisan.casio.jp/exec/system/1161228732
BMI ＝ 体重kg ÷ (身長m)2
適正体重 ＝ (身長m)2 ×22
基礎代謝
男性： 13.397×体重kg＋4.799×身長cm−5.677×年齢+88.362
女性： 9.247×体重kg＋3.098×身長cm−4.33×年齢+447.593
*/

// 各データの表示

?><!doctype html>

BMI: <?php  echo h(strval($bmi)); ?><br>
　　日本肥満学会の判定基準：<?php  echo h($criteria_jpn); ?><br>
　　世界保健機関(WHO)の判定基準：？？？<br>
適正体重: <?php  echo h(strval($appropriate_weight)); ?>kg<br>
基礎代謝: <?php  echo h(strval($basal_metabolism)); ?>kcal<br>













