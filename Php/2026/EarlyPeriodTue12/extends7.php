<?php  // extends7.php
declare(strict_types=1);

class Hoge {
    private int $num;
    public function __construct(int $num) {
        $this->num = $num;
    }
}

class Foo extends Hoge {
    public function __construct(int $num) {
        parent::__construct($num * 2);
    }
}

$obj = new Foo(123);
var_dump($obj);
