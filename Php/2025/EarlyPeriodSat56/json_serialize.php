<?php  // json_serialize.php

class Hoge {
    public function __construct(
        private int $num,
        private string $name,
    ){}
}
$hobj = new Hoge(num: 123, name: "hoge name");

$fp = fopen(__FILE__, "r");

$data = [
    "int" => 123,
    "float" => 3.14,
    "string" => "sssss",
    "bool" => true,
    "null" => null,
    "array" => [1, 2, 3],
    "object" => $hobj, // jsonだと壊れる
    // "stream" => $fp, // serializeでは処理できない, jsonだと「これがあるとerrorになる」
];

$s = serialize($data);
echo $s , "<br>\n";
$us = unserialize($s);
var_dump($us);

$json = json_encode($data);
echo $json , "<br>\n";
$data2 = json_decode($json, true);
var_dump($data2);

