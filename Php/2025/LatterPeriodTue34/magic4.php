<?php  // magic4.php

class Hoge {
	public function __construct(
		private int $num,
	){}

	public function __toString(): string {
		return "num is {$this->num}";
	}
}

$obj = new Hoge(123);
// var_dump($obj);

echo $obj;
