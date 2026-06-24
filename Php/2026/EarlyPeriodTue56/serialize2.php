<?php  // serialize2.php
declare(strict_types=1);

class Hoge {
    public function __construct(
        private int $num,
    ){}
}

$data = [
    "int" => 123,
    "float" => 3.14,
    "string" => "hello",
    "bool" => true,
    "array" => [1, 2, 3],
    "stream" => fopen(__FILE__, 'r'), // 持ち込めない
    "class" => new Hoge(987),
];
var_dump($data);

$ss = serialize($data);
var_dump($ss);

$data2 = unserialize($ss);
var_dump($data2);

