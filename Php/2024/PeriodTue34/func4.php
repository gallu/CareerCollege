<?php  // func4.php

function hoge($local_num) {
	var_dump($global_num); // XXX
	var_dump($local_num);
}

$global_num = 123;
var_dump($global_num);
var_dump($local_num); // XXX
hoge($global_num);
