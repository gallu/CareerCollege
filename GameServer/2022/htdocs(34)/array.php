<?php   // array.php
echo  "<pre>";

$awk = [1, "2", 3, 4.0, 5];
var_dump( $awk );

$awk2 = [];
$awk2[] = 12;
$awk2[] = 34;
$awk2[] = 56;
var_dump( $awk2 );
$awk2[0] = 99;
$awk2[123] = 123;
var_dump( $awk2 );
