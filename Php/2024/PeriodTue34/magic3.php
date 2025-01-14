<?php  // magic3.php

class Hoge {
	public function __get(string $name): mixed {
		return "dummy";
	}

	public function __set(string $name, mixed $value): void {
		echo "{$name} <- {$value} <br>\n";
	}
}

$obj = new Hoge();
$obj->data = 123;
var_dump( $obj->data );
