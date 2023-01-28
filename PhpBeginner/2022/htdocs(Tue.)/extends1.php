<?php   // extends1.php

class Hoge {
    public function test() {
        echo __METHOD__ , "\n";
    }
}

class Foo extends Hoge {
    public function t2() {
        echo __METHOD__ , "\n";
    }
}

//
$obj = new Hoge();
$obj->test();
//
$obj2 = new Foo();
$obj2->t2();
//
$obj2->test();

