<?php  // json_read.php

$json = '{"status":200,"errors":[],"message":{"id":123,"name":"hogera"}}';

// stdClass
$res = json_decode($json);
var_dump($res);

// array
$res = json_decode($json, true);
var_dump($res);
