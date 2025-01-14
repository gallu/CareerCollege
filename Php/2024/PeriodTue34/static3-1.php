<?php  // static3-1.php

class Hoge {
	public function test() {
		echo __METHOD__ , "<br> \n";
	}
	public function t() {
		$this->test();
	}
}

class Foo extends Hoge {
	public function test() {
		echo __METHOD__ , "<br> \n";
	}
}

$obj = new Hoge();
$obj->t();

$obj = new Foo();
$obj->t();
