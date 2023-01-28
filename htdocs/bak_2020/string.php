<?php   // string.php
//  http://dev2.m-fr.net/アカウント名/string.php

$v = 'ABC';

$s_1 = 'string is {$v}<br>';
var_dump($s_1);

$s_2 = "string is {$v}<br>";
var_dump($s_2);

$s_3 = "string is " . $v . "<br>";
var_dump($s_3);

