<?php  // static_class.php
class hoge {
    public function test() {
        echo "hoge \n";
    }
}
class sHoge {
    static public function test() {
        echo "sHoge \n";
    }
}
//
$obj = new hoge();
$obj->test();
//
sHoge::test();
