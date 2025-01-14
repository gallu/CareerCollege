<?php  // copy4.php

class Hoge {
	public int $num;
	public Foo $fobj;

	public function __clone() {
		// echo __METHOD__ , "<br> \n";
		$this->fobj = clone $this->fobj;
	}
}
class Foo {
	public int $num;
}

$hobj = new Hoge();
$hobj->num =  123;
$fobj = new Foo();
$fobj->num  = 456;
$hobj->fobj = $fobj;

// 深いコピー(ディープコピー): __cloneがあるから
$hobj2 = clone $hobj;
$hobj2->num = 9876;
$hobj2->fobj->num = 88888;

var_dump($hobj, $hobj2);

