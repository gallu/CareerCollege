<?php  // session.php
declare(strict_types=1);
ob_start();

echo "test <br>\n";

session_start();

$num = $_SESSION["num"] ?? 0;
$num += random_int(1, 999);
$_SESSION["num"] = $num;

echo $_SESSION["num"] , "<br>\n";
var_dump($_SESSION);

ob_end_flush();
