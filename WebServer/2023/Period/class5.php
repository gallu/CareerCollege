<?php  // class5.php
declare(strict_types=1);

trait HogeTrait {
    public function t() {
        echo __METHOD__ , "<br>";
    }
}
class Foo {
    use HogeTrait;

    public function ttt() {
        echo __METHOD__ , "<br>";
    }
}

//
$obj = new Foo();
$obj->t();
$obj->ttt();
