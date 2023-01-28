<?php  // extends1.php

class Hoge {
    public function test() {
        echo "Hoge::test <br>";
    }
}
class Foo extends Hoge {
    public function t2() {
        echo "Foo::t2 <br>";
    }
}

//
$obj = new Foo();
$obj->t2();
$obj->test();

