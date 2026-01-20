<?php  // class8.php

class Hoge {
	private int $num;
	public function __construct(int $i) {
		$this->num = $i;
	}
	public function getNum(): int {
		return $this->num;
	}
}

//
$obj = new Hoge(987);
var_dump($obj->getNum());

