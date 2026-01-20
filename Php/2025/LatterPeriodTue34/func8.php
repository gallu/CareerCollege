<?php  // func8.php

function hoge(int $num = 111, string $name = "unknown", float $rate = 0.01): string {
	return "num: {$num}, name: {$name}, rate: {$rate}";
}

$r = hoge();
var_dump($r);

$r = hoge(111, "change name");
var_dump($r);

$r = hoge(name: "change name2");
var_dump($r);
