<?php  // extends1.php

class Hoge {
    public function funcHoge() {
        var_dump(__METHOD__);
    }
}

class Foo extends Hoge {
    public function funcFoo() {
        var_dump(__METHOD__);
    }
}

$obj = new Foo();
$obj->funcFoo();
$obj->funcHoge();
