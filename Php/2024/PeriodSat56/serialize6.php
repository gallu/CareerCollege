<?php // serialize6.php

class Hoge {
    public function __construct(
        private int $num,
        private string $str,
    ){}
}

$fp = fopen(__FILE__, "r");
$obj = new Hoge(123, "hello");

$data = [
    "instance" => $obj,
    "resource" => $fp,
];
var_dump($data);

$ss = serialize($data);
var_dump($ss);

$data2 = unserialize($ss);
var_dump($data2);
