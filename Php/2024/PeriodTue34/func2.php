<?php // func2.php

// 消費税計算
function calTax($price) {
	// 消費税込みの価格を計算する
	$priceWithTax = $price * 1.1;
	return $priceWithTax;
}

// 消費税計算 端数切捨て
function calTax2($price) {
	// 消費税込みの価格を計算する
	$priceWithTax = $price * 1.1;
	$priceWithTax = floor($priceWithTax); // 端数切捨て
	
	return $priceWithTax;
}

// 消費税計算 端数切捨て 軽減税率対応
function calTax3($price, $reducedFlg) {
	// 消費税率の把握
	if ($reducedFlg === true) {
		$rate = 1.08;
	} else {
		$rate = 1.1;
	}
	// 消費税込みの価格を計算する
	$priceWithTax = $price * $rate;
	$priceWithTax = floor($priceWithTax); // 端数切捨て
	
	return $priceWithTax;
}

$prices = [100, 198, 250];
foreach($prices as $p) {
	$r = calTax3($p, false);
	echo "普通の: {$p} -> {$r} <br>";

	$r = calTax3($p, true);
	echo "軽減の: {$p} -> {$r} <br>";
}

