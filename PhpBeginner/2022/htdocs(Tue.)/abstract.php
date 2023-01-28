<?php   // abstract.php

abstract class Hoge {
    abstract public function test();
}

class Foo extends Hoge {
    public function test() {
        echo __METHOD__ , "<br>";
    }
}

//
$obj = new Foo();
$obj->test();
