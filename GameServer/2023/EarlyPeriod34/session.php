<?php   // session.php
declare(strict_types=1);

ob_start();
session_start();

var_dump($_SESSION);
$_SESSION["name"] = "value";
$_SESSION["name"] = [1, 2, 3];

ob_end_flush();
