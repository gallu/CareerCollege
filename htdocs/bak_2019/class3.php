<?php  // class3.php

class Hoge {
    //
    public static function test() {
        echo "test\n";
    }
    //
    public function test2() {
        echo "test2\n";
    }
}
//
Hoge::test();
//
$obj = new Hoge();
$obj->test2();




