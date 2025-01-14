<?php  // serialize2.php

class Hoge {
	private int $num = 123;
	private string $str = "hello";
	private float $f = 3.14;
	private bool $b = true;
	private array $arr = [1, 2, 3];
	private array $hash = [
		"1st" => 111,
		"2nd" => 222,
	];
	private null $n = null;
}

$obj = new Hoge();
var_dump($obj);

$s = serialize($obj);
var_dump($s);

$obj2 = unserialize($s);
var_dump($obj2);
