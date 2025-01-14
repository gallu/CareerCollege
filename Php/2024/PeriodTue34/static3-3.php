<?php  // static3-3.php

class Hoge {
	public static function test() {
		echo __METHOD__ , "<br> \n";
	}
	public static function t() {
		static::test();
	}
}

class Foo extends Hoge {
	public static function test() {
		echo __METHOD__ , "<br> \n";
	}
}

Hoge::t();

Foo::t();
