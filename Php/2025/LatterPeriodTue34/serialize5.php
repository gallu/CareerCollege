<?php  // serialize5.php

class Hoge {
	private $fp;
	private int $num;
	public function __construct(int $num) {
		$this->num = $num;
		$this->fp = fopen(__FILE__, "r");
	}
	public function __sleep() {
		return ["num"];
	}
	public function __wakeup() {
		$this->fp = fopen(__FILE__, "r"); // 再接続
	}
}

$obj = new Hoge(123);
var_dump($obj);

$ss = serialize($obj);

$obj2 = unserialize($ss);
var_dump($obj2);
