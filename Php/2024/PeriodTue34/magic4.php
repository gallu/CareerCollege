<?php  // magic4.php

class Hoge implements Stringable {
	public function __construct(
		private int $num,
		private string $str,
	){}

	public function __toString(): string {
		return "num: {$this->num}, str: {$this->str}";
	}
}

$obj = new Hoge(123, "hello");
var_dump($obj);

echo $obj , "<br> \n";
var_dump((string)$obj);

