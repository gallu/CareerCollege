<?php  // copy5.php
class Hoge {
	public int $num;
}
class Foo {
	public Hoge $h;
	public int $pos;
	// ディープコピー用
	public function __clone() {
		$this->h = clone $this->h;
	}
}

$obj = new Foo();
$obj->h = new Hoge();
$obj->h->num = 111;
$obj->pos = 0;
var_dump($obj);

$obj2 = clone $obj; // 深いcopy(ディープコピー deep copy)
$obj2->h->num = 456;
$obj2->pos = 10;
var_dump($obj, $obj2);