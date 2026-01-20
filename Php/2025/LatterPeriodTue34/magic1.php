<?php  // magic1.php

class Hoge {
	public function __call(string $name, array $arguments) {
		var_dump($name, $arguments);
	}
	public static function __callStatic(string $name, array $arguments) {
		var_dump("static", $name, $arguments);
	}
	private function pFunc() {
		echo __METHOD__ , "<br>\n";
	}
}

$obj = new Hoge();
$obj->test();
$obj->test(1, "2nd", true);
$obj->pFunc();
//
Hoge::test();
