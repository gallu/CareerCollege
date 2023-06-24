<?php  // cookie.php
declare(strict_types=1);

ob_start();

$num = random_int(1, 99);
echo "num is {$num}<br>\n";

var_dump($_COOKIE);
setcookie("count", (string) $num);

ob_end_flush();
