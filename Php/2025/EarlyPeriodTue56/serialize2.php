<?php  // serialize2.php

class Hoge {
    public function __construct(
        private int $num,
        private string $name,
        private float $rate,
        private null $null,
        private array $arr,
        private $fp,
        private $obj,
    ) {}
}
//
$fp = fopen(__FILE__, "r");
$o = new stdClass();
$obj = new Hoge(num: 123, name: "hoge s", rate: 3.14,
        null: null, arr: [1], fp: $fp, obj: $o
    );
var_dump($obj);

$s = serialize($obj);
var_dump($s);

$obj2 = unserialize($s);
var_dump($obj2);
