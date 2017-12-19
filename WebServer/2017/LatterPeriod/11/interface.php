<?php // interface.php
interface hoge {
    public function test();
}
interface bar {
    public function test_2();
}
class foo implements hoge, bar {
    public function test() {
        echo "foo#test<br>\n";
    }
    public function test_2() {
        echo "foo#test_2<br>\n";
    }
}
//$obj = new hoge();
$obj = new foo();
$obj->test();
