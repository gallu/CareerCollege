<?php // file_read2.php

$fileName = __FILE__;

//
$lines = file($fileName);
var_dump($lines);

//
$contents = file_get_contents($fileName);
var_dump($contents);
