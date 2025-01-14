<?php  // interface3.php

interface HogeInterface {
	public function add(int $i, int $j): int;
	
	// Fatal error: Interface function HogeInterface::add() cannot contain body
	// public function add(int $i, int $j): int {
		// return $i + $j;
	// }

	// Fatal error: Access type for interface method HogeInterface::sub() must be public
	// protected function sub(int $i, int $j): int;
	// private function mul(int $i, int $j): int;

	// Fatal error: Interfaces may not include properties 
	// public int $num = 0;
}

class Hoge implements HogeInterface {
	public function add(int $i, int $j): int {
		return $i + $j;
	}
}

$obj = new Hoge();
var_dump( $obj->add(12, 34) );
