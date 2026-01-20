<?php  // extends1.php
declare(strict_types=1);

class Hoge {
	public function hhh() {
		echo __METHOD__ , "<br>";
	}
}
// 継承
class Foo extends Hoge {
	public function fff() {
		echo __METHOD__ , "<br>";
	}
}
//
$hobj = new Hoge();
$hobj->hhh();
// $hobj->fff(); // Call to undefined method ...

//
$fobj = new Foo();
$fobj->fff();
$fobj->hhh(); // 親のメソッドを使うことができる



