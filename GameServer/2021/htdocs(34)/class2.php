<?php   // class2.php

class Hoge {
	//
	public $i;
}
//
$obj = new Hoge();
$obj->i = 123;
var_dump( $obj );
//
$obj2 = $obj;
var_dump( $obj2 );
$obj2->i = 999;
var_dump( $obj );
//
$obj3 = new Hoge();
var_dump( $obj3 );
//
$obj4 = clone $obj;
var_dump( $obj4 );


