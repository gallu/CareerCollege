<?php  // copy2.php

class Hoge {
	public int $num;
}
//
$obj = new Hoge();
$obj->num = 111;
$obj2 = $obj;
//
$obj2->num = 234;
var_dump($obj, $obj2);

//
$obj3 = new Hoge();
$obj3->num = 333;
//
$obj4 = clone $obj3;
$obj4->num = 456;
var_dump($obj3, $obj4);
