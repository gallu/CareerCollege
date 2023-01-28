<?php  // late_static_1.php

class Hoge {
    public function t1() {
        echo __METHOD__ , "<br>";
    }
    public function test() {
        $this->t1();
    }
}
class Foo extends Hoge {
    public function t1() {
        echo __METHOD__ , "<br>";
    }
}

//
$hobj = new Hoge();
$hobj->test();
//
$fobj = new Foo();
$fobj->test();
