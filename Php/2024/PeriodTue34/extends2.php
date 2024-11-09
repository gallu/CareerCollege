<?php  // extends2.php

class Hoge {
	public function test(){
		echo __METHOD__ , "<br> \n";
	}
	public function test2(){
		echo __METHOD__ , "<br> \n";
	}
}

class Foo extends Hoge {
	public function test2(){
		echo __METHOD__ , "<br> \n";
	}
	public function test3(){
		echo __METHOD__ , "<br> \n";
	}
}

$fobj = new Foo();
$fobj->test();
$fobj->test2();
$fobj->test3();

$hobj = new Hoge();
$hobj->test();
$hobj->test2();
$hobj->test3(); // Fatal error: Uncaught Error: Call to undefined method Hoge::test3() in

