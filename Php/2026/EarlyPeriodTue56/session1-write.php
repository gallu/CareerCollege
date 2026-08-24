<?php  // session1-write.php
declare(strict_types=1);
ob_start(); // 「Cannot modify header information」を防げる

echo "session set ... "; // Warning: Cannot modify header information - headers already sent by

session_start();

$num = random_int(0, 9999);
$_SESSION["num"] = $num;

echo "{$num} fin.";

ob_end_flush(); // ob_start() があるので書いておいたほうがよい
