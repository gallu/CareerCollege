<?php  // array2.php

echo "<pre>";

$arr = [1, 2];
print_r($arr);

// 要素を1つ取り出す
$v = $arr[1];
var_dump($v);
// 要素を1つ上書きする
$arr[0] = 111;
print_r($arr);

// 要素を1つ(後ろに)追加する
$arr[] = 345;
print_r($arr);

// 要素の数を数える
$count = count($arr);
var_dump($count);

// 配列を反復処理する
foreach ($arr as $key => $value) {
    echo "{$key}: {$value} \n";
}
foreach ($arr as $value) {
    echo "{$value} \n";
}
