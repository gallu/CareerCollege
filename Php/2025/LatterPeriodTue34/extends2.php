<?php  // extends2.php
declare(strict_types=1);

class Hoge {
	public function hhh() {
		echo __METHOD__ , "<br>";
	}
	public function ttt() {
		echo __METHOD__ , "<br>";
	}
}
class Foo extends Hoge {
	public function fff() {
		echo __METHOD__ , "<br>";
	}
	public function ttt() {
		parent::ttt(); // 親の同一メソッドを呼び出す
		echo __METHOD__ , "<br>";
	}
}
//
$hobj = new Hoge();
$hobj->hhh();
$hobj->ttt();
echo "<br>";
//
$fobj = new Foo();
$fobj->hhh();
$fobj->fff();
$fobj->ttt();


