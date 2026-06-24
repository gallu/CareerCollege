<?php  // arr3.php
echo "<pre>";

$item1 = [
	"name" => "ひのきの棒",
	"price" => 50,
	"num" => 1,
];
$item2 = [
	"name" => "おなべのふた",
	"price" => 100,
	"num" => 2,
];
$item3 = [
	"name" => "かわよろい",
	"price" => 200,
	"num" => 3,
];
//
$cart = [
	$item1,
	$item2,
	$item3,
];
print_r($cart);

// 合計金額を計算する
$total = 0; // 初期化
foreach ($cart as $k => $item) {
	$price = $item["price"];
	$num = $item["num"];
	echo "{$price}, {$num} \n";
	//
	$total = $total + ($price * $num);
	// $total += $price * $num;
}
echo "total is {$total} \n";

