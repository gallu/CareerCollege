<?php  // harray2.php

echo "<pre>";

// hash配列、連想配列
$item = [
    "name" => "ウミガメのスープ",
    "price" => 1300,
    "publisher" => "株式会社エクスナレッジ",
];

// 1要素を抜き出したり書き換えたり
var_dump( $item["name"] );

print_r($item);
$item["price"] = 2000;
print_r($item);

// countできる(あんまりやらない)
$count = count($item);
echo "count is {$count} \n";

// 反復処理(あんまりやらない)
foreach ($item as $k => $v) {
    echo "{$k}: {$v} \n";
}
