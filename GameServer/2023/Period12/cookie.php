<?php  // cookie.php

ob_start();

$hp = 200;
echo "now HP is {$hp}";
setcookie("hp", (string) $hp);
var_dump($_COOKIE);

ob_end_flush();