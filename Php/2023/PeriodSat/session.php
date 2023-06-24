<?php  // session.php
declare(strict_types=1);
ob_start();

echo "a";
session_start();

var_dump($_SESSION);
$_SESSION["name"] = "furu";
$_SESSION["hoge"] = [1, 2, 3];

ob_end_flush();
