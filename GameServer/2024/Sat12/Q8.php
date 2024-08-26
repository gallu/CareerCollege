<?php  // Q8.php
/*
以下のハッシュ配列を作成しなさい。

key: 1st  値: 111
key: 2nd  値: 222
key: 3rd  値: 333

作成したハッシュ配列を、print_rまたはvar_dumpで出力しなさい。
 */
$harr = [];
$harr["1st"] = 111;
$harr["2nd"] = 222;
$harr["3rd"] = 333;

$harr = [
    "1st" => 111,
    "2nd" => 222,
    "3rd" => 333,
];
print_r($harr);
var_dump($harr);

/*
以下のハッシュ配列を作成しなさい。

key: name  値: (好きな名前)
key: MaxHP 値: 100(数値)
key: HP    値: 100(数値)
key: MaxMP 値: 200(数値)
key: MP    値: 100(数値)

作成したハッシュ配列を、print_rまたはvar_dumpで出力しなさい。
 */
$pc = [
    "name" => "gallu",
    "MaxHP" => 100,
    "HP" => 100,
    "MaxMP" => 200,
    "MP" => 100,
];
print_r($pc);
var_dump($pc);

/*
上で作ったハッシュ配列($harrのほう: $pcでもよい)の各要素の、keyと値を出力するコードを書きなさい。
 */
echo "1st: {$harr['1st']} <br>\n";
echo "2nd: {$harr['2nd']} <br>\n";
echo "3rd: {$harr['3rd']} <br>\n";

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

/*
上で作ったハッシュ配列の各要素の、科目と点数を出力するコードを、ループの構文を使って書きなさい。
 */
foreach ($harr as $key => $value) {
    echo "{$key}: {$value} <br>\n";
}

/*
上で作ったハッシュ配列の点数の平均点(算術平均)の計算を、ループの構文を使って書きなさい。
 */
// 合計値の計算
$sum = 0;
// $count = 0;
foreach ($harr as $key => $value) {
    // $sum = $sum + $value;
    $sum += $value;
    // $count ++;
}

// 合計値 / 件数
// $avg = $sum / $count;
$avg = $sum / count($harr);

echo "{$avg} <br>\n";

/*
上で作ったハッシュ配列の点数の 標準偏差 の計算を、ループの構文を使って書きなさい。
 */
// 平方根は sqrt() で求められます
