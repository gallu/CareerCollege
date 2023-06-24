<?php  // session.php
declare(strict_types=1);

ob_start();
session_start();
$num = random_int(1, 99);
echo "num is {$num}<br>\n";

var_dump($_SESSION);
$_SESSION["count"] = $num;

ob_end_flush();
