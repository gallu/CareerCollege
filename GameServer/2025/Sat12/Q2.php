<?php  // Q2.php

echo "<pre>";

/*
変数 words に、以下の3個の要素(文字列)を持つ配列を作成しなさい。
hello
banana
yellow
代入した後、変数 words を、print_r で出力しなさい。
*/
$words = [
    "hello",
    "banana",
    "yellow",
];
print_r($words);

/*
変数 records に、以下の3個の要素(文字列)を持つ配列を作成しなさい。
red
night
grape
代入した後、変数 records を、print_rで出力しなさい。
*/
$records = [
    "red",
    "night",
    "grape",
];
print_r($records);

/*
「15 回繰り返す」処理をfor文で書きなさい。
処理の内容は「文字列 X の出力」とします。
 */
for ($i = 0; $i < 15; ++$i) {
    echo "X";
}
echo "\n";

/*
以下のif文を書きなさい。
変数 total に、値 96 を代入しなさい
「変数 total が 96 未満 なら「OK」を echo で出力する」if文を書きなさい
*/
$total = 96;
if ($total < 96) {
    echo "OK\n";
}
