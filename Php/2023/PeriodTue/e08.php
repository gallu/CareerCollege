<?php  declare(strict_types=1); // e08.php

class Hoge {
    private int $num;
    
    public function __construct(int $num) {
        $this->num = $num;
    }
    public function getNum(): int {
        return $this->num;
    }
}
$obj = new Hoge(123);
var_dump($obj->getNum());

class Foo extends Hoge {
    private string $str;

    public function __construct(int $num, string $str) {
        parent::__construct($num);
        $this->str = $str;
    }
    public function getStr(): string {
        return $this->str;
    }

    public function output() {
        // echo $this->num;
        // echo parent::getNum();
        echo $this->getNum();
        echo $this->str;
        echo $this->getStr();
    }
}

$obj = new Foo(123, "str");
$obj->output();
