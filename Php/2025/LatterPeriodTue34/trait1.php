<?php  // trait1.php

trait HogeTrait {
	public function ttt() {
		echo __METHOD__ , "<BR>";
	}
}

class Foo {
	use HogeTrait;
}

$obj = new Foo();
$obj->ttt();

