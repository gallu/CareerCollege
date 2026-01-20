<?php  // json.php

$awk = [
	"price" => 1200,
	"title" => "マネジメント",
];

var_dump($awk);

$js = json_encode($awk);
var_dump($js);

$awk2 = json_decode($js, true);
var_dump($awk2);
