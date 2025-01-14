<?php // serialize3.php

class Hoge {
	private $fp;
	
	public function __construct() {
		$this->fp = fopen( __FILE__ , "r");
	}
}

$obj = new Hoge();
var_dump($obj);

$s = serialize($obj);
var_dump($s);

$obj2 = unserialize($s);
var_dump($obj2);


