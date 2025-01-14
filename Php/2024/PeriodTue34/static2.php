<?php  // static2.php

class Hoge {
	private static int $num;
	
	public static function setNum($i) {
		self::$num = $i;
	}
	public static function print() {
		echo self::$num , "<br> \n";
	}
}

Hoge::setNum(123);
Hoge::print();


