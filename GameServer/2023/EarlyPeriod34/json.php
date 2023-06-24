<?php  // json.php

$awk = [
    "data" => [1, 2, 3],
    "message" => "ok",
];

header("Content-type: application/json");
echo json_encode($awk);
