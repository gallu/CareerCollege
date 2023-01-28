<?php  // LSB_base.php
class hoge {
    public function test1() {
		echo "hoge test1\n";
	}
    public function test2() {
		echo "hoge test2\n";
	}
	public function test() {
		$this->test1();
		$this->test2();
	}
}
class foo extends hoge {
    public function test2() {
		echo "foo test2\n";
	}
}
//
$hoge_obj = new hoge();
$hoge_obj->test();

$foo_obj = new foo();
$foo_obj->test();
