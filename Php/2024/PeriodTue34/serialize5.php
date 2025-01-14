<?php  // serialize5.php

class Hoge {
	private int $num ;
	private string $str;
	
	public function __construct(int $i, string $s) {
		$this->num = $i;
		$this->str = $s;
	}
	// serialize()時に呼ばれる
	public function __serialize(): array {
		echo __METHOD__ , "\n";
		return [
			'num' => $this->num * 2,
			'str' => $this->str,
		];
	}
	// unserialize()時に呼ばれる
	public function __unserialize(array $data): void {
		echo __METHOD__ , "\n";
		// var_dump($data);
		$this->num = $data["num"];
		$this->str = $data["str"];
	}
}

$obj = new Hoge(123, "あああ");
var_dump($obj);

$s = serialize($obj);
var_dump($s);

$obj2 = unserialize($s);
var_dump($obj2);

