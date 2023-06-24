<?php  // cookie.php
declare(strict_types=1);
ob_start();

echo "a";


var_dump($_COOKIE);
setcookie("name", "furu");
// setcookie("hoge", [1, 2, 3]);

ob_end_flush();
