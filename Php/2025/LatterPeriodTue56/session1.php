<?php  // session1.php
ob_start(); // Warning: Cannot modify header information - headers already sent 対策
session_start();

$i = random_int(0, 9999);
var_dump($i, $_SESSION);
$_SESSION["num"] = $i;

