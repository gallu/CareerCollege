<?php // magic_setget.php
//
class foo {
}
//
class hoge {
    public function __get($name) {
		//echo "get: {$name}\n";
		throw new Exception($name . 'なんていう変数はない！！（get）');
	}
    public function __set($name, $val) {
		//echo "set: {$name} = {$val}\n";
		throw new Exception($name . 'なんていう変数はない！！（set）');
	}
}
//
$obj = new hoge();
$obj->data = 10;
$i = $obj->data;
var_dump($i);
var_dump($obj);
//
$obj2 = new foo();
$obj2->data = 100;
$i = $obj2->data;
var_dump($i);
var_dump($obj2);










