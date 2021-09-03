<?php   // func.php

//
class Hoge {
	public $i;
}
//
function func1($i) {
	$i ++;
	echo __FUNCTION__ , " {$i} <br>\n";
}
function func2($o) {
	$o->i ++;
	$o->j = 999;
	echo __FUNCTION__ , " {$o->i} <br>\n";
}
//
$i = 10;
func1($i);
echo "{$i} <br>\n";
//
$obj = new Hoge();
$obj->i = 10;
func2($obj);
var_dump($obj);
