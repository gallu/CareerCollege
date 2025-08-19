<?php  // session1.php
session_start();

$num = random_int(0, 999);
$_SESSION['hoge'] = $num;

var_dump($num);
var_dump($_SESSION);
