<?php  // json1.php
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

$js = json_encode($data);
var_dump($js);

$data2 = json_decode($js, true);
var_dump($data2);
