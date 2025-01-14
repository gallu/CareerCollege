<?php  // magic2.php

class Hoge {
	public function __call(string $name, array $arg): mixed {
		echo __METHOD__, "<br> \n";
		var_dump($name, $arg);
		return null;
	}
	public static function __callStatic(string $name, array $arg): mixed {
		echo __METHOD__, "<br> \n";
		var_dump($name, $arg);
		return null;
	}
}

$obj = new Hoge();
$obj->func(1, "2nd", 3.14);

Hoge::func(1, "2nd", 3.14);
