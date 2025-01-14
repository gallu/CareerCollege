<?php  // session1.php
ob_start();
echo "1";
session_start();

$num = $_SESSION["num"] ?? 0;
$num += random_int(1, 100);

$_SESSION["num"] = $num;

var_dump($_SESSION);

ob_end_flush();
