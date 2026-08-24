<?php // Q3.php

/*
以下のif文を書きなさい。
変数 critical に、値 16 を代入しなさい
「変数 critical が 70 以上 なら「ok」を echo で出力する」if文を書きなさい
 */
$critical = 16;
if ($critical >= 70) {
    echo "ok";
}
echo "<br>";

/*
以下のif-else文を書きなさい。
変数 attack に、値 77 を代入しなさい
「変数 attack が 26 を超える なら「ok」を echo、そうでなければ「ng」を echo で出力する」if-else文を書きなさい
*/
$attack = 17;
if ($attack > 26) {
    echo "ok";
} else {
    echo "ng";
}
echo "<br>";

/*
以下のfor文を書きなさい。
1 から 4 まで繰り返しなさい
ループ変数 `i` の値を各ループで `echo` しなさい
*/
for ($i = 1; $i <= 4; ++$i) {
    echo "{$i},";
}
echo "<br>";

/*
以下のfor文を書きなさい。
1 から 10 まで繰り返しなさい
変数 `budget` に 1から10までの合計を代入し、最後に `echo` しなさい
*/
$budget = 0;
for ($i = 1; $i <= 10; ++$i) {
    $budget = $budget + $i;
    // $budget += $i;
}
echo "{$budget} <br>";

/*
以下のfor文を書きなさい。
0 から 10 回繰り返しなさい
各ループでドット（.）を1つずつ `echo` で出力しなさい
*/
for ($i = 0; $i < 10; ++$i) {
    echo ".";
}
echo "<br>";

/*
変数 `cost` に 0 を代入しなさい
`while` 文を書きなさい。条件は「変数 `cost` が 31 以下」のあいだ繰り返すことにしなさい
ループ内では以下の処理をしなさい
    `cost` の値を `echo` しなさい
    `cost` の値を インクリメント（+1）しなさい
*/
// 変数 `cost` に 0 を代入しなさい
$cost = 0;
// `while` 文を書きなさい。条件は「変数 `cost` が 31 以下」のあいだ繰り返すことにしなさい
while($cost <= 31) {
    // `cost` の値を `echo` しなさい
    echo "{$cost}, ";
    // `cost` の値を インクリメント（+1）しなさい
    $cost ++;
}
echo "<br>";

/*
変数 `area` に 1 を代入しなさい
`while` 文を書きなさい。条件は「変数 `area` が 195 以下」のあいだ繰り返すことにしなさい
ループ内では以下の処理をしなさい
    `area` の値を `echo` しなさい
    変数 `area` を 3 倍した値を、改めて変数 `area` に代入しなさい
*/
$area = 1;
while($area <= 195) {
    echo "{$area}, ";
    $area = $area * 3;
    // $area *= 3;
}
