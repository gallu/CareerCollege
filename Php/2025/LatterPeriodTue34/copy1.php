<?php  // copy1.php

$awk = [111];
// var_dump($awk);

$awk2 = $awk;
// var_dump($awk2);

$awk2[0] = 222;
var_dump($awk, $awk2);


class Hoge {
	public int $num;
}
//
$obj = new Hoge();
$obj->num = 111;
// var_dump($obj);

$obj2 = $obj;
// var_dump($obj2);

$obj2->num = 234;
var_dump($obj, $obj2);
