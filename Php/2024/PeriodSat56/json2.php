<?php // json2.php

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
    // "resource" => $fp,
];
var_dump($data);

$js = json_encode($data);
var_dump($js);

$data2 = json_decode($js, true);
var_dump($data2);
