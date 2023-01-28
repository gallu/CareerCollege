<?php   // array.php
//  https://dev2.m-fr.net/アカウント名/array.php

echo  "<pre>";

$awk = [1, "2", 3.0];
var_dump( $awk );

$awk2 = [];
$awk2[] = 12;
$awk2[] = "34";
$awk2[] = 56;
var_dump( $awk2 );
$awk2[0] = 999;
$awk2[123] = 123;
var_dump( $awk2 );
