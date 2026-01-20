<?php  // func6.php
declare(strict_types=1);

function hoge(string $name, int $price, float $rate): string {
	return "val is {$name}, {$price}, {$rate}";
}

$r = hoge("name", 12, 3.14);
var_dump($r);

// 名前付き引き数
$r = hoge(rate: 0.1, name:"hogera", price: 1234);
var_dump($r);

