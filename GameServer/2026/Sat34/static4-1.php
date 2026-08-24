<?php  // static4-1.php

class Hoge {
    protected function func() {
        echo __METHOD__ , "<br>";
    }
    public function t() {
        $this->func();
    }
}
class Foo extends Hoge {
    protected function func() {
        echo __METHOD__ , "<br>";
    }
}
//
$hobj = new Hoge();
$hobj->t();

$fobj = new Foo();
$fobj->t();