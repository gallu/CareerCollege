<?php  // session.php

ob_start();
session_start();
$hp = 200;
echo "now HP is {$hp}";
$_SESSION["hp"] = $hp;
var_dump($_SESSION);

ob_end_flush();