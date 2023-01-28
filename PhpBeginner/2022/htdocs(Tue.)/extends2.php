<?php   // extends2.php

class Hoge {
    public function test() {
        echo __METHOD__ , "<br>";
    }
}

class Foo extends Hoge {
    public function test() {
        echo __METHOD__ , "<br>";
    }
}

//
$obj = new Hoge();
$obj->test();
//
$obj2 = new Foo();
$obj2->test();

