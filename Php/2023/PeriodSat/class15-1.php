<?php // class15-1.php

class Hoge {
    public function func() {
        echo __METHOD__ , "<br>";
    }
    public function t() {
        $this->func();
    }
}
class Foo extends Hoge {
    public function func() {
        echo __METHOD__ , "<br>";
    }
}
$hobj = new Hoge();
$fobj = new Foo();
//
$hobj->func();
$fobj->func();
//
$hobj->t();
$fobj->t();

