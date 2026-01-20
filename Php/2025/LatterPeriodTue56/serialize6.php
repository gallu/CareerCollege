<?php  // serialize6.php

class Hoge {
    public function __construct(
        private int $num,
        private bool $flg,
    ){}
}

$obj = new Hoge(123, true);
$ss = serialize($obj);
$obj2 = unserialize($ss);
var_dump($obj2);


