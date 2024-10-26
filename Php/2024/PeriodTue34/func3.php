<?php  // func3.php

function hoge($num) {
	$num ++;
	return $num;
}
$i = hoge(1);
$i = hoge($i);
$i = hoge($i);
var_dump($i);

//
function foo($num) {
	$num ++;
}
$j = 1;
foo($j);
foo($j);
foo($j);
var_dump($j);

// XXX 書かないほうがいい
function bar(&$num) {
	$num ++;
}
$k = 1;
bar($k);
bar($k);
bar($k);
var_dump($k);





