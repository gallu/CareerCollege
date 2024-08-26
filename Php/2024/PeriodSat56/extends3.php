<?php  // extends3.php

class Hoge {
    private int $num;
    public function __construct(int $n) {
        $this->num = $n;
    }
}
// $obj = new Hoge(123);
// var_dump($obj);
class Foo extends Hoge {
    private string $name;
    public function __construct(int $n, string $name) {
        parent::__construct($n);
        $this->name = $n;
    }
}

$obj = new Foo(123, "name");
var_dump($obj);


