<?php   // string.php
//
echo  "<pre>";

//
$string_1 = "string";
$string_2 = 'string';
var_dump( $string_1 );
var_dump( $string_2 );

$string_1 = "\n";
$string_2 = '\n';
var_dump( $string_1 );
var_dump( $string_2 );

$i = 999;
$string_1 = "i is {$i}";
$string_2 = 'i is {$i}';
var_dump( $string_1 );
var_dump( $string_2 );


