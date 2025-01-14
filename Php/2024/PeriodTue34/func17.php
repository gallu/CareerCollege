<?php  // func17.php

class Hoge {
	public int $num;
}

function f1(int $i) {
	$i += 10;
}
$num = 10;
var_dump($num);
f1($num);
var_dump($num);

function f2(Hoge $o) {
	$o->num += 10;
}
$obj = new Hoge();
$obj->num = 10;
var_dump($obj);
f2($obj);
var_dump($obj);

//
$obj = new Hoge();
$obj->num = 10;
var_dump($obj);
f2(clone $obj);
var_dump($obj);

