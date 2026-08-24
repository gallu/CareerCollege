<?php  // Q4.php
/*
変数 values に、以下の2個の要素(文字列)を持つ配列を作成しなさい。
    lemon
    music
代入した後、変数 values を、var_dumpで出力しなさい。
*/
$values = ["lemon", "music"];
var_dump($values);
echo "<br>";

/*
変数 list に、以下の3個の要素(文字列)を持つ配列を作成しなさい。
    music
    apple
    dog
代入した後、変数 list を、var_dumpで出力しなさい。
*/
$list = ["music", "apple", "dog"];
var_dump($list);
echo "<br>";

/*
変数 `data` に、以下の 2 個の要素を持つ連想配列を作成しなさい。
    キー `licenseKey` に、文字列 'lemon' を設定しなさい
    キー `checksum` に、文字列 'table' を設定しなさい
代入した後、変数 `data` を `var_dump` で出力しなさい。
*/
$data = [
    "licenseKey" => "lemon",
    "checksum" => "table",
];
var_dump($data);

/*
変数 `settings` に、以下の 4 個の要素を持つ連想配列を作成しなさい。
    キー `armor` に、数値 554.3 を設定しなさい
    キー `filepath` に、文字列 'banana' を設定しなさい
    キー `speed` に、数値 36528 を設定しなさい
    キー `title` に、文字列 'green' を設定しなさい
代入した後、変数 `settings` を `var_dump` で出力しなさい。
*/
$settings = [
    "armor" => 554.3,
    "filepath" => "banana",
    "speed" => 36528,
    "title" => "green",
];
var_dump($settings);
echo "<br>";

/*
変数 $names に、以下の3個の要素を持つ配列を作成し、foreach で各要素をそのまま echo しなさい。
    文字列 'dog'
    数値 58034
    数値 931.9
*/
$names = [
    "dog",
    58034,
    931.9,
];
foreach ($names as $k => $v) {
    echo "{$v},";
}
echo "<br>";

/*
変数 $items に、以下の3個の数値を持つ配列を作成し、foreach で全要素の合計を変数 $total に代入し、
最後に echo しなさい。
    451
    688
    677
*/
$items = [
    451,
    688,
    677,
];
$total = 0;
foreach ($items as $k => $v) {
    $total = $total + $v;
}
echo "total is {$total} <br>";

