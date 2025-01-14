<?php  // session.php
declare(strict_types=1);

session_start();

var_dump($_SESSION);

$_SESSION["test"] = "test data";

$r = random_int(1, 99);
var_dump($r);

$_SESSION["num"] ??= 0;
$_SESSION["num"] += $r;
