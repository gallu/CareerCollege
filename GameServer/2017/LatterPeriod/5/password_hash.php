<?php
// password_hash.php

$password = 'pass';
var_dump( md5($password) );
var_dump( password_hash($password, PASSWORD_DEFAULT) );
var_dump( password_hash($password, PASSWORD_DEFAULT, ['cost' => 13]) );
