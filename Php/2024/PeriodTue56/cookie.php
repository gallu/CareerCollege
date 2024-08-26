<?php // cookie.php
declare(strict_types=1);

$num = random_int(0, 99999);
setcookie("tmp", (string)$num);
var_dump($_COOKIE);
