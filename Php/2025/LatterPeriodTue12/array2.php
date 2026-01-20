<?php  // array2.php
// https://dev2.m-fr.net/アカウント名/array2.php

echo "<pre>"; // print_rを使うため、見やすくする

$arr = [1, 2, 3];

// 1つ取り出す
$i = $arr[1];
var_dump($i);

// データを上書きする
print_r($arr);
$arr[1] = 111;
print_r($arr);

// 後ろにデータを追加する
$arr[] = 456;
print_r($arr);

// 配列の要素数の数え方
$cnt = count($arr);
echo "count is {$cnt} \n";

// 配列の各要素を1つづつ処理する
// XXX ダメなやり方
$count = count($arr);
for ($i = 0; $i < $count; ++$i) {
    $d = $arr[$i];
    echo "{$d} \n";
}
echo "\n";

// こちらで処理しましょう
foreach ($arr as $k => $v) {
    echo "{$k}: {$v} \n";
}
