<?php   // op.php
// https://dev2.m-fr.net/アカウント名/op.php

// 比較演算子
var_dump( 1 == 1 );
var_dump( 1 === 1 );
var_dump( 1 > 2 );
var_dump( 1 < 2 );
var_dump( 1 > 1 );
var_dump( 1 >= 1 );

// NULL結合演算子
$awk = [
    'key' => 'val',
];
//
$s = $awk['key'] ?? 'default';
var_dump( $s );
$s2 = $awk['no_key'];
var_dump( $s2 );
$s3 = $awk['no_key'] ?? 'default';
var_dump( $s3 );
