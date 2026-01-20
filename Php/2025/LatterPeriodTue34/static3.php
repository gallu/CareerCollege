<?php  // static3.php

class Hoge {
	private static int $num;
	
	public static function setNum(int $num) {
		// Hoge::$num = $num;
		self::$num = $num;
	}
	public static function getNum(): int {
		// return Hoge::$num;
		return self::$num;
	}
}

//
// Hoge::$num = 123; // Fatal error: Uncaught Error: Cannot access private property Hoge::$num
Hoge::setNum(456);
var_dump(Hoge::getNum());
