<?php  // cookie3.php

ob_start();

setcookie("hp", "", ["expires" => time() - 60]);
var_dump($_COOKIE);

ob_end_flush();
