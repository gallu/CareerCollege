<?php  // extends2.php

class Hoge {
    public function func() {
        echo __METHOD__ , "<br>";
    }
}

class Foo extends Hoge {
    public function func() {
        echo __METHOD__ , "<br>";
    }
}

//
$fobj = new Foo();
$fobj->func();
