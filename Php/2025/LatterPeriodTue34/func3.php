<?php  // func3.php

function hoge() {
	$local_v = 123;
	var_dump($local_v);
	var_dump($global_v); // Warning: Undefined variable
}

$global_v = "hello";
var_dump($global_v);
var_dump($local_v); // Warning: Undefined variable

hoge();
