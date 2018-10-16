<?php  // Singleton.php
class hoge { // テスト用
}
//
class Singleton {
	//
	private function __construct() {
	}
	
	//
    static public function getInstance() {
        static $obj = null;
		if (null === $obj) {
			$obj = new static;
		}
		return $obj;
	}
}
//
$obj = new hoge();
$obj2 = new hoge();
var_dump($obj, $obj2);
//
$obj = Singleton::getInstance();
$obj2 = Singleton::getInstance();
var_dump($obj, $obj2);
