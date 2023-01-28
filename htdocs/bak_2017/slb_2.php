<?php // slb_2.php
class hoge {
    static public function test() {
        echo "hoge#test<br>\n";
	}
	static public function call_test() {
        //self::test();
        static::test();
	}
}
class foo extends hoge {
    static public function test() {
        echo "foo#test<br>\n";
	}
}
//
hoge::call_test();
foo::call_test();

