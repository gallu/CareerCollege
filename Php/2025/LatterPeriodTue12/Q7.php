<?php  // Q7.php

/*
変数 category に、文字列 three wanderings it を代入しなさい。
代入した後、変数 category を、var_dumpで出力しなさい。
*/
$category = "three wanderings it";
var_dump($category);

/*
変数 score に、値 20 を代入しなさい
「変数 score が 78 と等しくない なら「OK」を, そうでなければ「NG」を echo で出力する」if文を書きなさい
*/
$score = 20;
if ($score !== 78) {
    echo "OK";
} else {
    echo "NG";
}

/*
台形の面積を計算するコードを書きなさい。
台形の面積は
(上底＋下底)×高さ ÷ ２
で求められます。
変数名は
- topBase（上底）
- bottomBase（下底）
- height（高さ）
がよいでしょう。
計算で得られた面積をechoで出力しなさい。
*/
$topBase = 10;
$bottomBase = 15;
$height = 20;

$area = ($topBase + $bottomBase) * $height / 2;
echo $area;

/*
1から15までの数値を、for文を使って1刻みで出力するコードを書きなさい。
数値の後ろにはカンマがあることを期待します。
なので、出力は
1,2,3, ... 15,
となる想定です。
*/
for ($i = 1; $i <= 15; ++$i) {
    echo "{$i},";
}

/*
変数 data に、以下の3個の要素(文字列)を持つ配列を作成しなさい。
peach
melon
fish
代入した後、変数 data を、var_dumpで出力しなさい。
*/
$data = [
    "peach",
    "melon",
    "fish",
];
var_dump($data);

/*
変数 items に、以下の2個の要素(文字列)を持つ連想配列を作成しなさい。
key:color, value:red
key:type, value:cat
key:price, value:5200
代入した後、変数 items を、var_dumpで出力しなさい。
*/
$items = [
    "color" => "red",
    "type" =>  "cat",
    "price" => 5200,
];
var_dump($items);

/*
「台形の面積を計算するコードを書きなさい」の設問を関数で書きなさい。

関数名：calculateTrapezoidArea
引数
- topBase（上底）
- bottomBase（下底）
- height（高さ）

関数を書いた後、適当な値で上述関数を呼び出して、結果をechoで出力しなさい。
*/
function calculateTrapezoidArea($topBase, $bottomBase, $height) {
    $area = ($topBase + $bottomBase) * $height / 2;
    return $area;

    // return ($topBase + $bottomBase) * $height / 2;
}

$area = calculateTrapezoidArea(10, 12, 14);
echo $area;
