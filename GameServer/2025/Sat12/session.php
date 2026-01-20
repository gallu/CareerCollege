<?php  // session.php

session_start();

var_dump($_SESSION);

$_SESSION['rand'] = random_int(0, 9999);
echo $_SESSION['rand'] , "<br>";
