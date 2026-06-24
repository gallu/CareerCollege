<?php  // serialize1.php
declare(strict_types=1);

$data = [
    [
        "name" => "aaa",
        "price" => 123,
    ],
    [
        "name" => "bbb",
        "price" => 456,
    ],
];

$ss = serialize($data);
var_dump($ss);

$data2 = unserialize($ss);
var_dump($data2);
