<?php  // extends5.php

class Hoge {
	private int $num;
	// protected int $num;
	public function __construct(int $i) {
		$this->num = $i;
	}
	public function getNum() {
		return $this->num;
	}
}

class Foo extends Hoge {
	public function cal() {
		// return $this->num * 2;
		return $this->getNum() * 2;
	}
}

$obj = new Foo(123);
var_dump($obj->getNum());
var_dump($obj->cal());
