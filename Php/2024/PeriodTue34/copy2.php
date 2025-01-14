<?php  // copy2.php

class Hoge {
	public int $num;
}

$obj = new Hoge();
$obj->num = 123;

$obj2 = clone $obj;
$obj2->num = 987;

var_dump($obj, $obj2);
