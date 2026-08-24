<?php  // serialize5.php
declare(strict_types=1);

class Hoge {
    public function __construct(
        private int $num,
        private float $rate,
        private string $name,
        private bool $flg,
        private array $arr,
        private $fp, // stream
        private stdClass $obj, // インスタンス
    ){}
}
//
$obj = new Hoge (
    123,
    3.14,
    "hogera",
    true,
    [1, 2],
    fopen(__FILE__, "r"),
    new stdClass(),
);
var_dump($obj);

$s = serialize($obj);
$obj2 = unserialize($s);
var_dump($obj2);

