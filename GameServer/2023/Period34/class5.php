<?php  // class5.php

class Hoge {
    public function __construct(int $num) {
        $this->num = $num;
    }
    
    private int $num;
}

//
$obj = new Hoge(123);
var_dump($obj);

// やったら怒られる
$obj->__construct(999);
var_dump($obj);

