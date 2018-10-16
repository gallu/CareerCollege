<?php  // LSB_new.php
class hoge {
    static public function test1() {
		echo "hoge test1\n";
	}
    static public function test2() {
		echo "hoge test2\n";
	}
	static public function test() {
		static::test1();
		static::test2();
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
