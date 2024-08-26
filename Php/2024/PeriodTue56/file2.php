<?php  // file2.php

$lines = file(__FILE__);
var_dump($lines);

$sf = file_get_contents(__FILE__);
var_dump($sf);
