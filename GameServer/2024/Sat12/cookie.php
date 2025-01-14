<?php  // cookie.php
declare(strict_types=1);
ob_start();

echo "test <br>\n";

$num = (int)($_COOKIE["num"] ?? 0);
$num += random_int(1, 999);
setcookie("num", (string)$num);

echo $_COOKIE["num"] ?? 0 , "<br>\n";
var_dump($_COOKIE);

ob_end_flush();
