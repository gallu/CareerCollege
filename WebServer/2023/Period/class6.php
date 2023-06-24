<?php  // class6.php
declare(strict_types=1);

abstract class Hoge {
    abstract public function t();
    public function ttt() {
        echo __METHOD__ , "<br>";
    }
}

class Foo extends Hoge {
    public function t() {
        echo __METHOD__ , "<br>";
    }
}

$obj = new  Foo();
$obj->t();
$obj->ttt();
