<?php  // str4.php
// https://dev2.m-fr.net/アカウント名/str4.php

$s = "abcdefg";
var_dump($s);

$c = $s[3];
var_dump($c);
$s[3] = "Z";
var_dump($s);

$ms = "あいうえお";
$c = $ms[2]; // "う" を期待
var_dump($c);
