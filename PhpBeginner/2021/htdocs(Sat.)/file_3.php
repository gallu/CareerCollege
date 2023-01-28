<?php  // file_3.php

//
$lines = file( __FILE__ );
var_dump($lines);

//
$s = file_get_contents( __FILE__ );
var_dump($s);
