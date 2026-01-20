<?php  // copy3.php

class Hoge {
	public int $num;
}
class Foo {
	public Hoge $h;
	public int $pos;
}

$obj = new Foo();
$obj->h = new Hoge();
$obj->h->num = 111;
$obj->pos = 0;
var_dump($obj);

$obj2 = clone $obj; // 浅いコピー(シャローコピー Shallow copy
$obj2->h->num = 456;
$obj2->pos = 10;
var_dump($obj, $obj2);

