<?php  // session.php
declare(strict_types=1);

session_start();

$r = random_int(0, 99999);
var_dump($_SESSION, $r);

$_SESSION["rand"] = $r;
