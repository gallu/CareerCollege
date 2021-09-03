<?php   // array.php
require_once( __DIR__ . '/dice.php');

$awk = [111, 222, 333, 3.1415, 'string', true];
var_dump($awk);
//
$awk = [];
var_dump($awk);

for($i = 0; $i < 10; ++$i) {
	$awk[] = dice('3d6');
}
var_dump($awk);
