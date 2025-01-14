<?php  // write1.php

var_dump( __DIR__ );
var_dump( is_writable(__DIR__) );

$fn = __DIR__ . "/write.txt";
var_dump( is_writable($fn) );

