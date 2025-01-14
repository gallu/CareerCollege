<?php  // copy1.php

class Hoge {
	public int $num;
}

$obj = new Hoge();
$obj->num = 123;
$obj2 = new Hoge();
$obj2->num = 999;
var_dump($obj, $obj2);

//
$obj3 = new Hoge();
$obj3->num = 111;
$obj4 = $obj3;
$obj4->num = 666;
var_dump($obj3, $obj4);

//
$arr1 = [1, 2];
$arr2 = $arr1;
$arr2[] = 3;
var_dump($arr1, $arr2);






