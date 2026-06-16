<?php  // file1.php

var_dump( __FILE__ );
var_dump( __DIR__ );

var_dump( __LINE__ );
var_dump( __LINE__ );

var_dump( file_exists(__FILE__) );
var_dump( file_exists(__DIR__) );
var_dump( file_exists("./dummy") );

var_dump( is_file(__FILE__) );
var_dump( is_file(__DIR__) );

var_dump( is_readable(__FILE__) );
