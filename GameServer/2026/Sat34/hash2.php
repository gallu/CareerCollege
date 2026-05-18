<?php  // hash2.php
echo "<pre>";

$hash_arr = [
    "str" => 10,
    "dex" => 15,
    "wiz" => 20,
];
print_r($hash_arr);

// 1つの値を取り出す
$dex = $hash_arr["dex"];
echo "dex is {$dex} \n";
// 上書き
$hash_arr["str"] = 50;
print_r($hash_arr);

// 追加
$hash_arr["name"] = "hoge";
print_r($hash_arr);

// 要素数の数え方
$count = count($hash_arr);
var_dump($count);

// 全要素を1つづつ処理
foreach ($hash_arr as $k => $v) {
    echo "{$k} => {$v} \n";
}

