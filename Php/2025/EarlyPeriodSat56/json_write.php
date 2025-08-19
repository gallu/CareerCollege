<?php  // json_write.php

$res = [
    "status" => 200,
    "errors" => [],
    "message" => [
        "id" => 123,
        "name" => "hogera",
    ],
];

$json = json_encode($res);
echo $json;
