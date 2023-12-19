<?php  // file_read2.php

$fn = __FILE__ ;

//
$lines = file($fn);
var_dump($lines);

//
$contents = file_get_contents($fn);
var_dump($contents);
