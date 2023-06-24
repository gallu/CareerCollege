<?php  // file.php

var_dump( __FILE__ );
var_dump( __DIR__ );

$fp = fopen(__FILE__, 'r');
var_dump($fp);
