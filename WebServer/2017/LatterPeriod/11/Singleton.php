<?php
// Singleton.php
class Singleton {
    //
    static public function getInstance() {
		static $obj = null;
		if (null === $obj) {
			$obj = new static();
		}
		return $obj;
	}
	//
	private function __construct() {
	}
	// clone対策
	private function __clone() {
	}
	// unserialize対策
	private function __wakeup() {
	}
}
//
$obj = Singleton::getInstance();
var_dump($obj);
$obj2 = Singleton::getInstance();
var_dump($obj2);
//
//$obj3 = new Singleton();
//$obj3 = clone $obj;
//var_dump($obj3);
$obj3 = unserialize(serialize($obj));
var_dump($obj3);

