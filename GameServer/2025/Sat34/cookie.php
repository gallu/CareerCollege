<?php  // cookie.php
declare(strict_types=1);

$r = random_int(0, 99999);
setcookie("rand", (string)$r);

var_dump($_COOKIE, $r);
