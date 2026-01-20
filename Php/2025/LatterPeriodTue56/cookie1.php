<?php  // cookie1.php
declare(strict_types=1);
ob_start(); // Warning: Cannot modify header information - headers already sent 対策

$i = random_int(0, 9999);
var_dump($i, $_COOKIE);
setcookie("num", (string)$i);

