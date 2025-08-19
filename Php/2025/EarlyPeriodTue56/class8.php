<?php  // class8.php

class Hoge {
    private int $num;
    
    public function __construct(int $num) {
        $this->num = $num;
    }
    public function getNum(): int {
        return $this->num;
    }
}

$obj = new Hoge(456);
var_dump($obj->getNum());
