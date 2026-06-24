<?php  // extends6.php
declare(strict_types=1);

class Hoge {
    // private int $num;
    protected int $num;
    public function __construct(int $num) {
        $this->num = $num;
    }
}

class Foo extends Hoge {
    public function __construct(int $num) {
        $this->num = $num * 2;
    }
}

$obj = new Foo(123);
var_dump($obj);
// var_dump($obj->num);
