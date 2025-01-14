<?php  // serialize1.php

class Hoge {
	private int $num ;
	private string $str;
	
	public function __construct(int $i, string $s) {
		$this->num = $i;
		$this->str = $s;
	}
}

$obj = new Hoge(123, "あああ");
var_dump($obj);

$s = serialize($obj);
var_dump($s);

$obj2 = unserialize($s);
var_dump($obj2);

