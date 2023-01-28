<?php  // deep_copy.php
//
class hoge {
	public function __clone() {
        $this->foo = clone $this->foo;
	}
	public $foo;
}
class foo {
	public $num;
}
//
$obj = new hoge();
$obj->foo = new foo();
$obj->foo->num = 100;
var_dump($obj);
//
$obj2 = clone $obj;
$obj2->foo->num = 999;
var_dump($obj, $obj2);
