<?php  // file2.php

$str = file_get_contents(__FILE__);
var_dump($str);

$lines = file(__FILE__);
var_dump($lines);
