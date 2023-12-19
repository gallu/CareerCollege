<?php  // hash3.php

$raw_pass = "password";

$t = microtime(true);
for($i = 0; $i < 50; ++$i) {
    $h = md5($raw_pass);
}
$te = microtime(true) - $t;
echo "{$te} <br>\n";

$t = microtime(true);
$h = password_hash($raw_pass, PASSWORD_DEFAULT);
$te = microtime(true) - $t;
echo "{$te} <br>\n";

$t = microtime(true);
$h = password_hash($raw_pass, PASSWORD_DEFAULT, ["cost" => 14]);
$te = microtime(true) - $t;
echo "{$te} <br>\n";


echo "fin.<br>";
