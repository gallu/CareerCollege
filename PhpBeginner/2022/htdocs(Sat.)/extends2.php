<?php  // extends2.php

class Hoge {
    public function test() {
        echo "Hoge::test <br>";
    }
}

class Foo extends Hoge {
    public function test() {
        echo "Foo::test <br>";
        parent::test();
    }
}

//
$obj = new Foo();
$obj->test();
