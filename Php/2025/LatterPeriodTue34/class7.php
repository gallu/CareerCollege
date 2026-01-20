<?php  // class7.php

class Hoge {
	public function __construct(int $num) {
		var_dump($num);
		echo __METHOD__ , "<br>";
	}
}
//
$obj = new Hoge(123);
var_dump($obj);
