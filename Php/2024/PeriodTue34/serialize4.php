<?php  // serialize4.php

class Hoge {
	private int $num ;
	private string $str;
	
	public function __construct(int $i, string $s) {
		$this->num = $i;
		$this->str = $s;
	}
	// serialize()時に呼ばれる
	public function __sleep(): array {
		echo __METHOD__ , "\n";
		return ["num"];
	}
	// unserialize()時に呼ばれる
	public function __wakeup(): void {
		echo __METHOD__ , "\n";
	}
}

$obj = new Hoge(123, "あああ");
var_dump($obj);

$s = serialize($obj);
var_dump($s);

$obj2 = unserialize($s);
var_dump($obj2);
