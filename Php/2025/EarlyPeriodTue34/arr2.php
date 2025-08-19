<?php  // arr2.php

echo "<pre>";

$arr = [1, 2, 3];

// 1つ取り出したり修正したり
$i = $arr[0];
echo "[0] is {$i} \n";
$arr[1] = 111;
print_r($arr);

// データを(後ろに)追加する
$arr[] = 456;
print_r($arr);

// データの数を数える
$cnt = count($arr);
echo "count is {$cnt} \n";

// 配列の各要素を処理する
// XXX こっちはやらないほうがいい
$len = count($arr);
for ($i = 0; $i < $len; ++$i) {
    echo "{$i}: {$arr[$i]} \n";
}
echo "\n";

// こっちでループ処理を書こう
foreach ($arr as $k => $v) {
    echo "{$k}: {$v} \n";
}
