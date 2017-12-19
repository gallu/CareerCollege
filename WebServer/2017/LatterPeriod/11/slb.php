<?php // slb.php
class hoge {
    public function test() {
        echo "hoge#test<br>\n";
	}
	public function call_test() {
        $this->test();
	}
}
class foo extends hoge {
    public function test() {
        echo "foo#test<br>\n";
	}
}
//
$h_obj = new hoge();
$h_obj->call_test();
//
$f_obj = new foo();
$f_obj->call_test();

