<?php  // session.php
declare(strict_types=1);
session_start();

var_dump($_SESSION);
$_SESSION["tmp"] = random_int(0, 99999);
$_SESSION["obj"] = new ArrayObject([1,2,3]);
