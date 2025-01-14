<?php  // cookie.php
declare(strict_types=1);
ob_start();

var_dump($_COOKIE);

setcookie("test", "test data");

$r = random_int(1, 99);
var_dump($r);

setcookie("num", strval(($_COOKIE["num"] ?? 0) + $r));
