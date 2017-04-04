<?php

$pw = 'test';
$h_pw = password_hash($pw, PASSWORD_DEFAULT);
var_dump($h_pw);
