<?php  // serialize.php

class Hoge {
	public function __construct(
		private int $num,
		private bool $flg,
		private array $awk,
	){
	}
}

$obj = new Hoge(123, true, [1, 2, "3rd"]);
var_dump($obj);

$ss = serialize($obj);
var_dump($ss);

$obj2 = unserialize($ss);
var_dump($obj2);
