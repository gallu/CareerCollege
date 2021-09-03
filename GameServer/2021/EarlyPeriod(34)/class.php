<?php   // class.php

class Hoge {
	// 関数(メソッド)
	public function t() {
		echo "Hoge:t() <br>\n";
	}
	public function setNum($v) {
		$this->pi = $v;
	}
	
	// 変数(プロパティ)
	public $i;
	private $pi;
}
//
$obj = new Hoge();
var_dump( $obj );
//
$obj->t();
$obj->i = 999;
var_dump( $obj );
//
//$obj->pi = 123;
$obj->setNum(123);
var_dump( $obj );
