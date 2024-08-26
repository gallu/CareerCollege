<?php  // class11.php

class Hoge {
    public function func() {
        echo __METHOD__ , "<br>\n";
    }
    public function func2() {
        echo __METHOD__ , "<br>\n";
    }
}

class Foo extends Hoge {
    public function func() {
        parent::func();
        echo __METHOD__ , "<br>\n";
    }
    public function funcFoo() {
        echo __METHOD__ , "<br>\n";
    }
}

$obj = new Hoge();
$obj->func();
$obj->func2();

$fobj = new Foo();
$fobj->func();
$fobj->func2();
$fobj->funcFoo();





