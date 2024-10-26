<?php  // func15.php
declare(strict_types=1);

function hoge(int $num) {
	//
	$fn = function() use($num) {
		return $num * 2;
	};

	$r = $fn();
	return $r;
}
//
$r = hoge(123);
var_dump($r);




