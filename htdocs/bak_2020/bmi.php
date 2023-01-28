<?php   // bmi.php

//var_dump($_GET);
$weight = $_GET['weight'] ?? 0;
$height = $_GET['height'] ?? 0;
//var_dump($weight);
//var_dump($height);

// 体重と身長を「数値(実数)」にする
$weight = abs(floatval($weight));
$height = abs(floatval($height));
//var_dump($weight);
//var_dump($height);

// validate
// XXX 今回はやらない

// 「体重」または「身長」の数値が0(未入力等)の場合のエラー処理
if ( (0.0 === $weight) or (0.0 === $height) ) {
    echo '身長と体重はちゃんと入力してください';
    exit;
}

// BMIの計算
// BMI ＝ 体重kg ÷ (身長m)2
//$bmi = $weight / (  pow($height / 100, 2) );
$bmi = $weight / (  ($height / 100) ** 2 );
//var_dump($bmi);

// typeのチョイス
/*
https://ja.wikipedia.org/wiki/%E3%83%9C%E3%83%87%E3%82%A3%E3%83%9E%E3%82%B9%E6%8C%87%E6%95%B0#%E7%9B%B8%E4%BC%BC%E5%89%87%E3%81%A8%E3%81%AE%E9%96%A2%E4%BF%82
肥満（BMI：30以上）
太り気味（BMI：25以上30未満）
普通体重（BMI：18.5以上25未満）
やせた（BMI：18.5未満）
 */
// 馬力で書く方法
// 太り気味（BMI：25以上30未満）
if ( 25 <= $bmi && $bmi < 30) {
    $type = '太り気味';
}
// 普通体重（BMI：18.5以上25未満）
if ( 18.5 <= $bmi && $bmi < 25) {
    $type = '普通体重';
}
// 肥満（BMI：30以上）
if (30 <= $bmi) {
    $type = '肥満';
}
// やせた（BMI：18.5未満）
if ($bmi < 18.5) {
    $type = 'やせた';
}

// ちょっとだけスマートな書き方
if (30 <= $bmi) {
    // 肥満（BMI：30以上）
    $type = '肥満';
} else if (25 <= $bmi) {
    // 太り気味（BMI：25以上30未満）
    $type = '太り気味';
} else if (18.5 <= $bmi) {
    // 普通体重（BMI：18.5以上25未満）
    $type = '普通体重';
} else {
    // やせた（BMI：18.5未満）
    $type = 'やせた';
}

?><!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>BMI</title>
</head>
<body>
<h1>BMIの計算</h1>
あなたのBMIは
<?php
    printf(" %.2f (%s) ", $bmi, $type);
?>
です。
</body>
</html>


