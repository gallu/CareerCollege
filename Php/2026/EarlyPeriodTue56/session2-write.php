<?php  // session2-write.php
declare(strict_types=1);
ob_start();
session_start();

$_SESSION["obj"] = new stdClass();
$_SESSION["arr"] = [1, 2, 3];

echo "fin.";

