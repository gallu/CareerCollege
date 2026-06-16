<?php  // array3.php

echo "<pre>";

// 空の配列。これは、あり。
$arr = [];
print_r($arr);

// 配列の後ろに要素を追加
// あまり推奨されない書き方
array_push($arr, 1);
print_r($arr);

// 数値キーを直接指定して、かつバラバラだったり歯抜けだったり
// これもあんまり推奨されない
$arr[9] = 999;
$arr[5] = 555;
print_r($arr);

// キーに使えるのは「整数」と「文字列」のみ
$arr[true] = 111;
$arr[3.14] = 3.14;
print_r($arr);

