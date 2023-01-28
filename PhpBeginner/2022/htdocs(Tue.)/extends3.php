<?php   // extends3.php

class Hoge {
    public function test() {
        echo __METHOD__ , "<br>";
    }
}

class Foo extends Hoge {
    public function test() {
        parent::test();
        echo __METHOD__ , "<br>";
    }
}

//
$obj2 = new Foo();
$obj2->test();