<?php  // abstract1.php

abstract class AbstractHoge {
	abstract public function ttt();
	
	public function fff() {
		echo __METHOD__ , "<br>";
	}
}

class Foo extends AbstractHoge {
	public function ttt() {
		echo __METHOD__ , "<br>";
	}
}

$obj = new Foo();
$obj->fff();
$obj->ttt();

