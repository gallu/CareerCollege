<?php  // session2.php
declare(strict_types=1);
session_start();

var_dump($_SESSION);
unset($_SESSION["tmp"]);
unset($_SESSION["obj"]);


