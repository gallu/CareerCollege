<?php // abstract.php
abstract class hoge {
    abstract public function test();
    public function test_2() {
        echo "hoge#test_2<br>\n";
	}
private $data;
}
class foo extends hoge {
    public function test() {
        echo "foo#test<br>\n";
    }
}
//$obj = new hoge();
$obj = new foo();
$obj->test();
