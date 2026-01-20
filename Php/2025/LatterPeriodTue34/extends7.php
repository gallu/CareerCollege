<?php  // extends7.php

class Hoge {
	public function __construct(int $i) {
		echo __METHOD__ , " {$i}<br>";
	}
}

class Foo extends Hoge {
	public function __construct(string $s, int $i) {
		parent::__construct($i);
		echo __METHOD__ , " {$s}<br>";
	}
}

$obj = new Foo("string", 123);
