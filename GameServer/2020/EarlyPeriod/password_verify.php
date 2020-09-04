<?php  // password_verify.php

$raw_pass = 'password';
$hash = '$2y$10$Qe5ZT4qUlYUDBOBrGht2Ye.NWkCOB..3TpfoRMpcyBWTEbhmGnaEu';

var_dump( password_verify($raw_pass, $hash) );

