<?php  // class13.php

$obj = new class(){
};
var_dump($obj);

$obj = new class(){
    public function t() {
        var_dump(__METHOD__);
    }
};
$obj->t();

$obj = new class(123) {
    private int $num;
    public function __construct(int $i) {
        $this->num = $i;
    }
};
var_dump($obj);

$obj = new class(num: 456) {
    public function __construct(
        public readonly int $num,
    ){
    }
};
var_dump($obj);
var_dump($obj->num);

