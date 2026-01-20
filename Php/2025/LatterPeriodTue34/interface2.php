<?php  // interface2.php

interface HogeInterface {
	public function ttt(int $i): int;
	public function fff();
}

interface FooInterface {
	public function fff();
}

class Bar implements HogeInterface, FooInterface {
	public function ttt(int $i): int {
		return $i * 2;
	}
	
	public function fff() {
		echo __METHOD__ , "<br>";
	}
}

$obj = new Bar();
$obj->fff();
var_dump( $obj->ttt(123) );
