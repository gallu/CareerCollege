<?php  // static4-2.php

class Hoge {
	public static function func() {
		echo __METHOD__ , "<br>\n";
	}
	public static function t() {
		// self::func();
		static::func();
	}
}
class Foo extends Hoge {
	public static function func() {
		echo __METHOD__ , "<br>\n";
	}
}

Hoge::t();
Foo::t();
