<?php  // static1.php
declare(strict_types=1);

class Hoge {
	const int NUM = 123;
	public static function ttt() {
		echo __METHOD__ , "<br>";
	}
}

var_dump( Hoge::NUM );
Hoge::ttt();
