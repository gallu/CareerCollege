<?php  // serialize2.php

class Hoge {
	private $fp;
	public function __construct() {
		$this->fp = fopen(__FILE__, "r");
	}
}

$obj = new Hoge();
var_dump($obj);

$ss = serialize($obj);

$obj2 = unserialize($ss);
var_dump($obj2);
