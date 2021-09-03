<?php   // array.php
require_once( __DIR__ . '/dice.php' );

//
$awk = [1, 2, 3, 3.1415, 'string', true];
$awk = array(1, 2, 3, 3.1415, 'string', true);
var_dump($awk);

//
$awk = [];
for($i = 0; $i < 10; ++$i) {
	$awk[] = dice('3d6');
}
var_dump($awk);
