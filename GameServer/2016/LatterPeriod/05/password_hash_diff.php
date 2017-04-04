<?php
// password_hash_diff.php
$raw_pass = 'password';

//
$t = microtime(true);
for($i = 0; $i < 100; $i ++) {
    //$pass = md5($raw_pass);
    $pass = password_hash($raw_pass, PASSWORD_DEFAULT);
}
$t = microtime(true) - $t;
var_dump($t);

