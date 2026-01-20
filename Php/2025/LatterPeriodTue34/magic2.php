<?php  // magic2.php

class Hoge {
	private int $data;
	public function __set(string $name, mixed $value): void {
		var_dump($name, $value);
	}
	public function __get(string $name): mixed {
		return "{$name}, ないよ？";
	}
}

$obj = new Hoge();
$obj->data = 123;
var_dump($obj->data);

