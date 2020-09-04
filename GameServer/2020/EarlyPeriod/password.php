<?php  // password.php

$raw_pass = 'password';

echo md5($raw_pass) , "<br>\n";
echo sha1($raw_pass) , "<br>\n";
echo password_hash($raw_pass,  PASSWORD_DEFAULT) , "<br>\n";
