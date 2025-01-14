<?php  // cookie1.php
ob_start();
echo "1";


$num = (int)($_COOKIE["num"] ?? "0");
$num += random_int(1, 100);

setcookie("num", (string)$num);

var_dump($_COOKIE);

ob_end_flush();
