<?php // extends.php
class hoge {
    public function test() {
        echo "hoge#test<br>\n";
	}
    public function test_2() {
        echo "hoge#test_2<br>\n";
	}
}
class foo extends hoge {
    public function test() {
		parent::test();
        echo "foo#test<br>\n";
	}
}
$h_obj = new hoge();
$h_obj->test();
$h_obj->test_2();
//
$f_obj = new foo();
$f_obj->test();
$f_obj->test_2();
