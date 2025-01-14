<?php  // singleton.php

class Hoge {
}
$obj = new Hoge();
$obj2 = new Hoge();
var_dump($obj, $obj2);

class Singleton {
	private function __construct() {
	}
	public static function getInstance() {
		static $obj = null;
		if (null === $obj) {
			$obj = new static();
		}
		return $obj;
	}
	// 以下、治安に応じて
	private function __clone() {
	}
	public function __unserialize(array $data): void {
		throw new Exception("なにしとんじゃごるぁ");
	}
}
$sobj = Singleton::getInstance();
$sobj2 = Singleton::getInstance();
var_dump($sobj, $sobj2);
// $sobj3 = new Singleton();
// var_dump($sobj, $sobj2, $sobj3);

// $sobj3 = clone $sobj;
// var_dump($sobj, $sobj2, $sobj3);

// echo serialize($sobj);
// $s = 'O:9:"Singleton":0:{}';
// $sobj3 = unserialize($s);
// var_dump($sobj, $sobj2, $sobj3);


