<?php  // func7.php

function hoge(int $num, string $name, float $rate): string {
	return "num: {$num}, name: {$name}, rate: {$rate}";
}

$r = hoge(123, "name", 3.14);
var_dump($r);

// $r = hoge(123);
// var_dump($r);

// $r = hoge(123, "name", 3.14, 123, 456); // 現状、エラーにならない
// var_dump($r);

// $r = cos(1.23, 4.56); // Uncaught ArgumentCountError

function foo(int $num, string $name = "unknown", float $rate = 0.01): string {
	return "num: {$num}, name: {$name}, rate: {$rate}";
}

$r = foo(456, "foobar", 1.414);
var_dump($r);

$r = foo(789);
var_dump($r);

$r = foo(321, "hogera");
var_dump($r);

// $r = foo(); // Uncaught ArgumentCountError: Too few arguments to 
// var_dump($r);
