<?php  // serialize3.php

class Hoge {
	public function __construct(
		private int $num,
		private bool $flg,
	){}

	public function __sleep() {
		echo __METHOD__ , "<br>\n";
		return ["num", "flg"];
	}
	public function __wakeup() {
		echo __METHOD__ , "<br>\n";
	}
}

$obj = new Hoge(123, true);

echo "Trap 1<br>\n";
$ss = serialize($obj);

echo "Trap 2<br>\n";
$obj2 = unserialize($ss);
var_dump($obj2);
