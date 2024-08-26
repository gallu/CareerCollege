<?php  // class16.php
declare(strict_types=1);

class Hoge {
    // private int $num;
    protected int $num;
    
    public function __construct(int $i) {
        $this->num = $i;
    }
}

class Foo extends Hoge {
    public function getNum(): int {
        return $this->num;
    }
}

$obj = new Foo(123);
var_dump($obj);

var_dump($obj->getNum());
