<?php  // interface1.php

interface HogeInterface {
	public function add(int $i, int $j): int;
}

class Hoge implements HogeInterface {
	public function add(int $i, int $j): int {
		return $i + $j;
	}
}

$obj = new Hoge();
var_dump( $obj->add(12, 34) );
