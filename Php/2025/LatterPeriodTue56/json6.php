<?php  // json6.php

class Hoge {
    public function __construct(
        private int $num,
        private bool $flg,
    ){}
}

$obj = new Hoge(123, true);
$js = json_encode($obj);
$obj2 = json_decode($js, true);
var_dump($obj2);
