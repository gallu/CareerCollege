<?php  // pre_box_1.php

// box
$awk = [
	['id' => 1, 'name' => 'ゴブリン'],
	['id' => 1, 'name' => 'ゴブリン'],
	['id' => 1, 'name' => 'ゴブリン'],
	['id' => 2, 'name' => 'オーガ'],
	['id' => 2, 'name' => 'オーガ'],
];

//
$json = json_encode($awk);
var_dump($json);
$awk_json = json_decode($json, true);
var_dump($awk_json);

//
$serialize = serialize($awk);
var_dump($serialize);
$awk_serialize = unserialize($serialize);
var_dump($awk_serialize);








