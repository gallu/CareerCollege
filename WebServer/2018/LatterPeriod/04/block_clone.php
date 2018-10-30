<?php  // block_clone.php
class hoge {
    //
	private function __clone() {
	}
}

//
$obj = new hoge();
$obj2 = clone $obj;

