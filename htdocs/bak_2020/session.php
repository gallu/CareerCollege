<?php  // session.php
ob_start();
session_start();

var_dump( $_SESSION );

//
$r = mt_rand(0, 9999);
var_dump($r);

//
$_SESSION['rand'] = $r;

//
ob_end_flush();