<?php

// ガチャ引いたときのレスポンス(想定)
$json_string = array(
    //'message' => 'Hello json world.',
    'get_card_id'   => 'SSR_001',
    'get_card_name' => 'SSR スペシャルカード',
    'effect'        => 'e_02',
);
//var_dump($json_string);

//
header("Content-Type: application/json; charset=utf-8");

//
$json = json_encode($json_string);
echo $json;
