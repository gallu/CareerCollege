<?php  // class13.php

$obj = new class () {
};
var_dump($obj);

$obj = new class () {
    public function t() {
        echo "TTTTT<br>\n";
    }
};
$obj->t();

$obj = new class(num: 123) {
    public function __construct(
        public readonly int $num,
    ) {
    }
};
var_dump($obj->num);
