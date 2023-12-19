<?php  // session3.php

ob_start();
session_start();

unset($_SESSION["hp"]);
var_dump($_SESSION);

ob_end_flush();
