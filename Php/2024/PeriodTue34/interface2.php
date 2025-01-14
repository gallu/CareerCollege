<?php  // interface2.php

interface HogeInterface {
	public function add(int $i, int $j): int;
}
interface Hoge2Interface {
	public function add(int $i, int $j): int;
	public function sub(int $i, int $j): int;
}

class Hoge implements HogeInterface, Hoge2Interface {
	public function add(int $i, int $j): int {
		return $i + $j;
	}
	public function sub(int $i, int $j): int {
		return $i - $j;
	}
}

$obj = new Hoge();
var_dump( $obj->add(12, 34) );
var_dump( $obj->sub(12, 34) );
