<?php  // cart.php

https://dev2.m-fr.net/アカウント名/cart.php

/*
 * ECサイトの「買い物かご(カート)」のイメージ
 */

$item1 = [
    "name" => "りんご",
    "price" => 98,
    "num" => 5,
];

$item2 = [
    "name" => "バナナ",
    "price" => 298,
    "num" => 2,
];

// カート
$cart = []; // 空のカート
$cart[] = $item1;
$cart[] = $item2;

echo "<pre>";
print_r($cart);

// 合計金額を計算
$total = 0;
foreach ($cart as $key => $item) {
    // print_r($item);
    $total = $total + ($item["price"] * $item["num"]);
}
var_dump($total);
