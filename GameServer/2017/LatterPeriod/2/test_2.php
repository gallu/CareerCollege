<?php
//
ob_start();

//
$post_data = file_get_contents('php://input');
$get_data = $_SERVER['QUERY_STRING'];

//
$awk = [
    'status' => 200,
    'message' => 'OK',
    'method' => $_SERVER['REQUEST_METHOD'],
    'post_data' => $post_data,
    'get_data' => $get_data,
];

//
$json_string = json_encode($awk);

//
//header("Content-Type: text/plain; charset=utf-8");
header("Content-Type: application/json; charset=utf-8");
//
echo $json_string;
