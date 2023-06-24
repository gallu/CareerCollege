<?php  // cookie.php
declare(strict_types=1);

ob_start();


var_dump($_COOKIE);
setcookie("name", "123");
// setcookie("name", [1, 2, 3]);

ob_end_flush();
