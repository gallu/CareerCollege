<?php  // file.php

var_dump( __FILE__ );
var_dump( __DIR__ );
var_dump( __LINE__ );
var_dump( __LINE__ );

$fp = fopen(__FILE__, 'r');
var_dump($fp);
