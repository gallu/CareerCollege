<?php  // extends3.php

class Hoge {
	public function test(){
		echo __METHOD__ , "<br> \n";
	}
}

class Foo extends Hoge {
	public function test(){
		parent::test();
		echo __METHOD__ , "<br> \n";
	}
}

$fobj = new Foo();
$fobj->test();
