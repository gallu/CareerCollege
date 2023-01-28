<?php  // isset.php

$awk = [
    "key1" => "value",
    "key222" => "value",
    "key999" => null,
];
//
var_dump( isset($awk["key1"]) );
var_dump( isset($awk["hoge"]) );
//
var_dump( isset($awk) );
var_dump( isset($hoge) );
//
var_dump( isset($awk["key999"]) );
var_dump( array_key_exists("key999", $awk) );

// unset
unset($awk["key1"]);
var_dump( isset($awk["key1"]) );
var_dump( array_key_exists("key1", $awk) );

// Warningが出るので注意
if ($awk["key1"] === null) {
}

