<?php // class6.php

class Hoge {
    //
    public function __construct($v) {
        $this->val = $v;
    }
    //
    private $val;
}

//
$obj = new Hoge(123);
var_dump($obj);
