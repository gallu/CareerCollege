<?php  // array2.php

echo "<pre>";

//
$awk = [1, 2, 3, 4, 5];
print_r($awk);

// 1つの要素を取り出す
$i = $awk[2];
echo "key 2 is {$i} \n";

// 配列の要素数の取得
$num = count($awk);
echo "count is {$num} \n";

// 配列のループ
// 「やめとけ」なやりかた
$len = count($awk);
for ($i = 0; $i < $len; ++$i) {
    echo "key {$i}, value {$awk[$i]} \n";
}

// こっちを推奨
foreach ($awk as $k => $v) {
    echo "key {$k}, value {$v} \n";
}
