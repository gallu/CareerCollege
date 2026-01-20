<?php  // trait3.php

trait HogeTrait {
	public function ttt() {
		echo __METHOD__ , "<br>";
	}
}
trait FooTrait {
	public function uuu() {
		echo __METHOD__ , "<br>";
	}
}

class Bar {
	use HogeTrait;
	use FooTrait;
}
//
$obj = new Bar();
$obj->ttt();
$obj->uuu();

