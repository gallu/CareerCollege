<?php  // serialize1.php

$res = [
    "status" => 200,
    "errors" => [],
    "message" => [
        "id" => 123,
        "name" => "hogera",
    ],
];

$s = serialize($res);
echo $s , "<br>\n";

$data = unserialize($s);
var_dump($data);
