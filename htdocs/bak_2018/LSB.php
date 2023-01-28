<?php  // LSB.php
class hoge {
    static public function test1() {
		echo "hoge test1\n";
	}
    static public function test2() {
		echo "hoge test2\n";
	}
	static public function test() {
		self::test1();
		self::test2();
	}
}
class foo extends hoge {
    static public function test2() {
		echo "foo test2\n";
	}
}
//
hoge::test();
foo::test();

