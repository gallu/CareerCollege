<?php  // web_api.php

// XXX ここに、本当はいろいろな処理
$res = [
    'status' => 200,
	'body' => 'hoge',
];

//
header('Content-type: application/json');
echo  json_encode($res);
