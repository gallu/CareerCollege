<?php  // harr2.php

echo "<pre>";

// hash配列、連想配列
$harr = [
    "title" => "ネットワーク図解辞典",
    "price" => 1280,
];

// 1つ取り出したり修正したり
var_dump( $harr["title"] );

$harr["price"] = 980;
print_r($harr);

// データを追加する
$harr["detail"] = "わかりやすいよ！！";
print_r($harr);

// データの数を数える(あんまりやらない)
$cnt = count($harr);
echo "count is {$cnt} \n";

// ループ処理(あんまりやらない)
foreach ($harr as $k => $v) {
    echo "{$k}: {$v} \n";
}

