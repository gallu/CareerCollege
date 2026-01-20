<?php  // serialize6.php

class Hoge {
	private $fp;
	private int $num;
	public function __construct(int $num) {
		$this->num = $num;
		$this->fp = fopen(__FILE__, "r");
	}
	public function __serialize(): array {
		return [
			"num" => $this->num,
		];
	}
	public function __unserialize(array $data): void {
		$this->num = $data["num"];
		$this->fp = fopen(__FILE__, "r"); // 再接続
	}
}
$obj = new Hoge(321);
var_dump($obj);

$ss = serialize($obj);

$obj2 = unserialize($ss);
var_dump($obj2);