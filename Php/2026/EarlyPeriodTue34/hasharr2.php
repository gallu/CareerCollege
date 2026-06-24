<?php   // hasharr2.php

echo "<pre>";

// 連想配列、文字列キー配列、hash配列
$harr = [
    "name" => "aaa",
    "price" => 980,
];
print_r($harr);

// 要素を1つ取り出す
$price = $harr["price"];
var_dump($price);
// 要素を1つ上書きする
$harr["price"] = 880;
print_r($harr);

// 要素を1つ追加する
$harr["tax"] = 88;
print_r($harr);

// 要素を数える(あんまりやらない)
$count = count($harr);
var_dump($count);

// 配列を反復処理する(これもあんまりやらない)
foreach ($harr as $key => $value) {
    echo "{$key}: {$value} \n";
}

