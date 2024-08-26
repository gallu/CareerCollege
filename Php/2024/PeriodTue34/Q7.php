<?php  // Q7.php
/*
以下のハッシュ配列を作成しなさい。

key: 1st  値: 111
key: 2nd  値: 222
key: 3rd  値: 333

作成したハッシュ配列を、print_rまたはvar_dumpで出力しなさい。
 */
$harr = [
    // key => value ,
    "1st" => 111 ,
    "2nd" => 222 ,
    "3rd" => 333 ,
];
print_r($harr);

/*
上で作ったハッシュ配列の各要素の、keyと値を出力するコードを書きなさい。
 */
echo "1st: ", $harr['1st'], "<br>\n";
echo "2nd: ", $harr['2nd'], "<br>\n";
echo "3rd: ", $harr['3rd'], "<br>\n";

/*
上で作ったハッシュ配列の各要素の、keyと値を出力するコードを、ループの構文を使って書きなさい。
 */
foreach ($harr as $key => $value) {
    echo "{$key}: {$value} <br>\n";
}

/*
以下のハッシュ配列を作成しなさい。
なお、科目名がkey、点数が値とします。点数は整数で作成しなさい。

国語  75点
英語  85点
日本史 70点
化学  90点
数学  100点

作成したハッシュ配列を、print_rまたはvar_dumpで出力しなさい。
 */
$harr = [
    "国語" => 75,
    "英語" => 85,
    "日本史" => 70,
    "化学" => 90,
    "数学" => 100,
];
print_r($harr);
echo "<br> \n";

/*
上で作ったハッシュ配列の各要素の、科目と点数を出力するコードを、ループの構文を使って書きなさい。
 */
foreach ($harr as $key => $value) {
    echo "{$key}: {$value} <br>\n";
}
echo "<br> \n";

/*
上で作ったハッシュ配列の点数の平均点(算術平均)の計算を、ループの構文を使って書きなさい。
 */
$sum = 0;
foreach ($harr as $key => $value) {
    // $sum = $sum + $value;
    $sum += $value;
}
var_dump($sum / count($harr));
echo "<br> \n";

/*
定数名 TAX に 0.1 を定義するコードを書きなさい
 */
define("TAX", 0.1);
// const TAX = 0.1;
var_dump(TAX);

/*
上で作ったハッシュ配列の点数の 標準偏差 の計算を、ループの構文を使って書きなさい。
 */
// step1：平均値を求める
$sum = 0;
foreach ($harr as $key => $value) {
    // $sum = $sum + $value;
    $sum += $value;
}
$avg = $sum / count($harr);

$dev_sum = 0;
foreach ($harr as $key => $value) {
    // step2：偏差を求める 各データの値 - 平均値
    $dev = $value - $avg;
    // step3-1：分散を求める (偏差)^2 の合計
    $dev_sum += ($dev ** 2);
}
// step3-2：分散を求める (偏差)^2 の合計 / データの個数
$variance = $dev_sum / count($harr);

// step4：平方根を求める 標準偏差 = 分散の平方根
$sd = sqrt($variance);
var_dump($sd);
