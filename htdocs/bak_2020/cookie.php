<?php  // cookie.php
//
ob_start();

var_dump( $_COOKIE );

//
$r = mt_rand(0, 9999);
var_dump($r);

//
setcookie('rand', (string)$r);

//
ob_end_flush();
