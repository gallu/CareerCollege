<?php   // bmi_cal.php
//
require_once('./bmi_init.php');

// データの取得
$name = $_POST['name'] ?? '';
$height = abs(floatval($_POST['height'] ?? 0));
$weight = abs(floatval($_POST['weight'] ?? 0));

// セッションへの格納
$_SESSION['name'] = $name;
$_SESSION['height'] = $height;
$_SESSION['weight'] = $weight;
//var_dump($name, $height, $weight);

// validate
if ( (0.0 === $height) or (0.0 === $weight) ) {
    // エラーメッセージを出したい
    $_SESSION['error_invalid_value'] = true;
    // bmi.phpに移動させる
    header('Location: ./bmi.php');
    return ;
}

// XXX ここまでOKなら「データはそろった」

// 計算
// https://keisan.casio.jp/exec/system/1161228732
// XXX BMI ＝ 体重kg ÷ (身長m)2
$bmi = $weight / (($height/100) ** 2);
//var_dump($bmi);
$bmi = round($bmi, 2);
//var_dump($bmi);

// 判定
if ($bmi < 16) { // 16未満	痩せすぎ
    $judgment = '痩せすぎ';
} else if ($bmi < 16.99) { // 16.00〜16.99以下	痩せ
    $judgment = '痩せ';
} else if ($bmi < 18.49) { // 17.00〜18.49以下	痩せぎみ
    $judgment = '痩せぎみ';
} else if ($bmi < 24.99) { // 18.50〜24.99以下	普通体重
    $judgment = '普通体重';
} else if ($bmi < 29.99) { // 25.00〜29.99以下	前肥満
    $judgment = '前肥満';
} else if ($bmi < 34.99) { // 30.00〜34.99以下	肥満(1度)
    $judgment = '肥満(1度)';
} else if ($bmi < 39.99) { // 35.00〜39.99以下	肥満(2度)
    $judgment = '肥満(2度)';
} else { // 40.00以上	肥満(3度)
    $judgment = '肥満(3度)';
}

?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>BMI計算 結果</title>
</head>
<body>
<h1>BMI計算 結果</h1>
<?php echo h($name); ?>のBMI値は <?php echo h($bmi); ?>、 <?php echo h($judgment); ?> です。<br>

</body>
</html>