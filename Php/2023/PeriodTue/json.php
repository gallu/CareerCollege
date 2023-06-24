<?php  // json.php

$data = [
    'status' => 200,
    'message' => 'ok',
    'data' => [1, 2, 3],
];

$json_string = json_encode($data);

header("Content-type: application/json");
echo $json_string;
