<?php   // extends2.php

class Hoge {
    public function func1() {
        echo __METHOD__ , "<br>";
    }
    public function func2() {
        echo __METHOD__ , "<br>";
    }
}

class Foo extends Hoge {
    public function func2() {
        echo __METHOD__ , "<br>";
    }
    public function func3() {
        echo __METHOD__ , "<br>";
    }
}
//
$fobj = new Foo();
$fobj->func2();
