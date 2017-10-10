<?php
//
ob_start();

//
$i = mt_rand(0, 99);
//
$awk = [
    'status' => 200,
    'message' => 'OK',
    'num_data' => $i,
];

//
$json_string = json_encode($awk);

//
//header("Content-Type: text/plain; charset=utf-8");
header("Content-Type: application/json; charset=utf-8");
//
echo $json_string;
