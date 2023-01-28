<?php   // rand.php
// https://dev2.m-fr.net/アカウント名/rand.php
//
$i = random_int(0, 9999);
var_dump($i);

//
$s = random_bytes(16);
$s2 = bin2hex($s);
var_dump($s2);
$s2 = base64_encode($s);
var_dump($s2);

//
$s = openssl_random_pseudo_bytes(16);
$s2 = bin2hex($s);
var_dump($s2);

//
$uuid = trim( `uuidgen -r` );
var_dump($uuid);

// uniqid(), mt_rand(), rand(), md5(), sha1() あたりが出てきたら「そいつはダメ！！！」

