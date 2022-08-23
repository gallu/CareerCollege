<?php   // array2.php
// https://dev2.m-fr.net/アカウント名/array2.php

//
$as = [ "string", "str2", "str3" ];
var_dump($as);
var_dump( $as[1] );

//
$count = count($as);
var_dump($count);

//
foreach($as  as  $k => $v) {
    echo "{$k}: {$v} <br>\n";
}








