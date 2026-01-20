<?php  // extends6.php
declare(strict_types=1);

class Hoge {
	public function hhh(int|float|string $v): string|null {
		return "Hoge:{$v}";
	}
}
class Foo extends Hoge {
	// public function hhh(int|float|string $v): string|null {
	// public function hhh(bool $v): string|null { // Fatal error: Declaration of Foo::hhh(bool $v)
	// public function hhh(int|float|string $v): int { // Fatal error: Declaration of Foo::hhh(string|int|float $v):
	// 親よりも「広い」引き数、「狭い」戻り値は、変えてもOK
	public function hhh(int|float|string|bool $v): string {
		return "Foo:{$v}";
	}
}
//
$obj = new Foo();
$r = $obj->hhh(3.14);
var_dump($r);

