<?php  // class2.php

class Hoge {
	public function test() {
		echo "Hoge#test()<br>\n";
	}
	public function test2() {
		echo "Hoge#test2()<br>\n";
	}
}
//
class Foo extends Hoge {
	public function test2() {
		parent::test2();
		echo "Foo#test2()<br>\n";
	}
}
//
$h_obj = new Hoge();
$h_obj->test();
$h_obj->test2();
//
$f_obj = new Foo();
$f_obj->test();
$f_obj->test2();






