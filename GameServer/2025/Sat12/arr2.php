<?php  // arr2.php

echo "<pre>";

$arr = [1, 2, 3, 4];
print_r($arr);

// 要素から１つ取り出す
$i = $arr[2];
echo "{$i} \n";
// 要素の1つを上書きする
$arr[2] = 3456;
print_r($arr);

// 配列に1つ要素を追加する
$arr[] = 555;
print_r($arr);

// 配列の「要素の数」を取得する
$num = count($arr);
echo "count is {$num} \n";

// 非推奨
$len = count($arr);
for ($i = 0; $i < $len; ++$i) {
    echo "{$i}: {$arr[$i]} \n";
}

// 普段はこっち
foreach ($arr as $k => $v) {
    echo "{$k}: {$v} \n";
}
