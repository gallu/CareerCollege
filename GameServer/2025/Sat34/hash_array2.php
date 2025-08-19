<?php  // hash_array2.php
echo "<pre>";

// 基本
$awk = [
    "HP" => 100,
    "MP" => 150,
    "STR" => 10,
    "DEX" => 12,
];
print_r($awk);

// 1つの要素を取り出す
$hp = $awk["HP"];
echo "hp is {$hp} \n";

// 配列の要素数の取得(あんまりやんない)
$num = count($awk);
echo "count is {$num} \n";

// 配列のループ
foreach ($awk as $k => $v) {
    echo "key {$k}, value {$v} \n";
}

