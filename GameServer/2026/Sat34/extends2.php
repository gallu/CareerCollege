<?php  // extends2.php
declare(strict_types=1);

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

$obj = new Foo();
$obj->func3();
$obj->func2();
$obj->func1();
