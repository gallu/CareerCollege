<?php  // Q5.php

/*
変数 budget に、数値 419 を代入しなさい。
代入した後、変数 budget を、var_dumpで出力しなさい。
*/
$budget = 419;
var_dump($budget);

/*
変数 prefix に、文字列 Secunda a Prima を代入しなさい。
代入した後、変数 prefix を、var_dumpで出力しなさい。
*/
$prefix = "Secunda a Prima";
var_dump($prefix);

/*
変数 fee に 63、変数 luck に 10 を代入しなさい。
その後、fee と luck を引き算(減算)した計算結果を $time に代入し、その後 var_dump($time) で出力しなさい。
*/
$fee = 63;
$luck = 10;
$time = $fee - $luck;
var_dump($time);

/*
変数 armor に 31、変数 distance に 12 を代入しなさい。
その後、armor を distance で割ったあまりを求め、その計算結果を $experience に代入し、
    その後 var_dump($experience) で出力しなさい。
*/
$armor = 31;
$distance = 12;
$experience = $armor % $distance;
var_dump($experience);

/*
変数 gender に、文字列 coffee を代入しなさい
「変数 gender が red と等しくない なら「ok」を echo、そうでなければ「ng」を echo で出力する」if-else文を書きなさい
*/
$gender = "coffee";
if ($gender !== "red") {
    echo "ok";
} else {
    echo "ng";
}

/*
変数 capacity に、値 4 を代入しなさい
「変数 capacity が 55 以下 なら「ok」を echo、そうでなければ「ng」を echo で出力する」if-else文を書きなさい
*/
$capacity = 4;
if ($capacity <= 55) {
    echo "ok";
} else {
    echo "ng";
}

/*
以下のfor文を書きなさい。
    1 から 9 まで繰り返しなさい
    ループ変数 `i` の値を各ループで `echo` しなさい
*/
for ($i = 1; $i <= 9; ++$i) {
    echo $i;
}

/*
以下のfor文を書きなさい。
    0 から 8 回繰り返しなさい
    各ループでドット（.）を1つずつ `echo` で出力しなさい
*/
for ($i = 0; $i < 8; ++$i) {
    echo ".";
}

/*
以下のwhile文を書きなさい。
    変数 `count` に 0 を代入しなさい
    `while` 文を書きなさい。条件は「変数 `count` が 74 以下」のあいだ繰り返すことにしなさい
    ループ内では以下の処理をしなさい
        `count` の値を `echo` しなさい
        `count` の値を インクリメント（+1）しなさい
*/
$count = 0;
while($count <= 74) {
    echo $count;
    $count ++;
}

/*
以下のwhile文を書きなさい。
    変数 `margin` に 1 を代入しなさい
    `while` 文を書きなさい。条件は「変数 `margin` が 352 以下」のあいだ繰り返すことにしなさい
    ループ内では以下の処理をしなさい
        `margin` の値を `echo` しなさい
        変数 `margin` を 5 倍した値を、改めて変数 `margin` に代入しなさい
*/
$margin = 1;
while($margin <= 352) {
    echo $margin;
    $margin = $margin * 5;
    // $margin *= 5;
}

/*
変数 words に、以下の3個の要素(文字列)を持つ配列を作成しなさい。
    blue
    orange
    yellow
代入した後、変数 words を、var_dumpで出力しなさい。
*/
$words = [
    "blue",
    "orange",
    "yellow",
];
var_dump($words);

/*
変数 `data` に、以下の 2 個の要素を持つ連想配列を作成しなさい。
    キー `trackingNumber` に、文字列 'small' を設定しなさい
    キー `defense` に、数値 84752 を設定しなさい
代入した後、変数 `data` を `var_dump` で出力しなさい。
*/
$data = [
    "trackingNumber" => "small",
    "defense" => 84752,
];
var_dump($data);

/*
変数 $names に、以下の3個の要素を持つ配列を作成し、foreach で各要素をそのまま echo しなさい。
    文字列 'bus'
    文字列 'banana'
    数値 77469
*/
$names = [
    'bus',
    'banana',
    77469,
];
foreach ($names as $v) {
    echo $v;
}
foreach ($names as $k => $v) {
    echo $v;
}
