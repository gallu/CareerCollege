<?php   // file_3.php

//
$data = file(__FILE__);
var_dump($data);

//
$s = file_get_contents( __FILE__ );
var_dump($s);
