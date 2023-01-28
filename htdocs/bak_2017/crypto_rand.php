<pre>
<?php
// crypto_rand.php
// http://dev2.m-fr.net/アカウント/crypto_rand.php

$s = openssl_random_pseudo_bytes(128);
var_dump($s);
var_dump(bin2hex($s));

$s = random_bytes(128);
var_dump($s);
var_dump(bin2hex($s));

