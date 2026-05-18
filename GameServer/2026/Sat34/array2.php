<?php  // array2.php
echo "<pre>";

$arr = [1, 2];
print_r($arr);

// １つの値を取り出す
$value = $arr[0];
var_dump($value);
// 値を上書きする
$arr[1] = 222;
print_r($arr);

// 配列に要素を追加する: 1つの追加なら array_push() より効率がよい
$arr[] = 333;
print_r($arr);

// 要素数の数え方
$count = count($arr);
var_dump($count);

// 全要素を1つづつ処理
foreach ($arr as $k => $v) {
    echo "{$k} -> {$v} \n";
}

