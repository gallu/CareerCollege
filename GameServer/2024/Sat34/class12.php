<?php  // class12.php

class Hoge {
    // private int $num;
    // protected int $num;

    private int $num;
    public function setNum(int $i) {
        $this->num = $i;
    }
}

class Foo extends Hoge {
    // public function setNum(int $i) {
        // $this->num = $i;
    // }
}

$obj = new Foo();
$obj->setNum(123);
var_dump($obj);

