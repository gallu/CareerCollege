<?php  // extends6.php
class Hoge {
	private int $num;
	public function __construct(int $i) {
		$this->num = $i;
	}
	public function getNum() {
		return $this->num;
	}
}
class Foo extends Hoge {
	private string $name;
	public function __construct(int $i, string $s) {
		parent::__construct($i);
		$this->name = $s;
	}
	public function getName() {
		return $this->name;
	}
	public function print() {
		echo "{$this->getName()}: {$this->getNum()}";
	}
}
//
$obj = new Foo(123, "hello");
$obj->print();
