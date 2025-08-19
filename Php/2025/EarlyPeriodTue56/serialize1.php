<?php  // serialize1.php

class Hoge {
    public function __construct(
        private int $num,
        private string $name,
        private float $rate,
    ) {}
}
//
$obj = new Hoge(num: 123, name: "hoge s", rate: 3.14);
var_dump($obj);

$s = serialize($obj);
var_dump($s);

$obj2 = unserialize($s);
var_dump($obj2);

