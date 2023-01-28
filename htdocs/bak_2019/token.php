<?php  // token.php

//
$uuid = trim(shell_exec('uuidgen -r'));
var_dump($uuid);
echo "<br>\n";

//
$token = bin2hex(random_bytes(24));
var_dump($token);
echo "<br>\n";

$token = base64_encode(random_bytes(24));
var_dump($token);
echo "<br>\n";

