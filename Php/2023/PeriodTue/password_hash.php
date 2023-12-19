<?php  // password_hash.php

$raw_pass = "pass";
$h = password_hash($raw_pass, PASSWORD_DEFAULT);

echo $h;
