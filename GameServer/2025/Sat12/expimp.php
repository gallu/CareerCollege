<?php  // expimp.php
// https://dev2.m-fr.net/アカウント名/expimp.php

$base = "1-2-4-8";
$arr = explode("-", $base); // split
print_r($arr);

$new_string = implode(",", $arr); // join
var_dump($new_string);
