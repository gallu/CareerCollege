<?php  // class9-1.php

class Hoge {
    public function t1() {
        echo "Hoge::t1() <br>";
    }
    public function test() {
        $this->t1();
    }
}
//
class Foo extends Hoge {
    public function t1() {
        echo "Foo::t1() <br>";
    }
}
//
$h_obj = new Hoge();
$h_obj->test();
//
$f_obj = new Foo();
$f_obj->test();
