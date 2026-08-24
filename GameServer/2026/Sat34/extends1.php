<?php  // extends1.php
declare(strict_types=1);

class Hoge {
    public function h() {
        echo __METHOD__ , "<br>";
    }
}
class Foo extends Hoge {
    public function f() {
        echo __METHOD__ , "<br>";
    }
}

//
$obj = new Foo();
$obj->f();
$obj->h();
