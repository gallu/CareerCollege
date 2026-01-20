<?php  // func5.php
declare(strict_types=1);

function add(int|float $i, int|float $j): int|float {
	return $i + $j;
}

$r = add(12, 34);
var_dump($r);

$r = add(0.1, 0.2);
var_dump($r);


// $r = add("12", "2e2");
// var_dump($r);

// $r = add("abc", "def");
// var_dump($r);

