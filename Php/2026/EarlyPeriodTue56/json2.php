<?php  // json2.php
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
    // "stream" => fopen(__FILE__, 'r'), // json_encodeできない
    "class" => new Hoge(987), // jsonだと持ち込めない
];
var_dump($data);

$js = json_encode($data);
var_dump($js);

$data2 = json_decode($js, true);
var_dump($data2);

