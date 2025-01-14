<?php  // static3-2.php

class Hoge {
	public static function test() {
		echo __METHOD__ , "<br> \n";
	}
	public static function t() {
		self::test();
	}
}

class Foo extends Hoge {
	public static function test() {
		echo __METHOD__ , "<br> \n";
	}
}

Hoge::t();

Foo::t();
