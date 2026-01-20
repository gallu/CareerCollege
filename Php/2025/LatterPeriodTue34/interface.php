<?php  // interface.php

interface HogeInterface {
	public function ttt();
}

class Foo implements HogeInterface {
	public function ttt() {
		echo __METHOD__ , "<br>";
	}
}

$obj = new Foo();
$obj->ttt();
