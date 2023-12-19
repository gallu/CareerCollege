<?php  // password_hash.php

$raw_pass = "";
$hash_pass = password_hash($raw_pass, PASSWORD_DEFAULT);

echo $hash_pass;
