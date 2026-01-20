<?php // extends4.php
declare(strict_types=1);

class Hoge {
	private int $num;
	public function __construct(int $i) {
		$this->num = $i;
	}
	// private function ppp() {
	protected function ppp() {
		echo __METHOD__ , "<br>";
	}
	public function getNum(): int {
		return $this->num;
	}
}
class Foo extends Hoge {
	public function getNum(): int {
		$this->ppp();
		return parent::getNum();
	}
}

//
$fobj = new Foo(123);
var_dump($fobj);
var_dump($fobj->getNum());




