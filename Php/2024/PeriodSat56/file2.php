<?php  // file2.php

$r = file_exists( __FILE__ );
var_dump($r);

$r = file_exists( __DIR__ );
var_dump($r);

$r = file_exists( "./dummy" );
var_dump($r);

//
$r = is_writable( __FILE__ );
var_dump($r);
$r = is_readable( __FILE__ );
var_dump($r);
