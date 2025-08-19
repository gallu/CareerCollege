<?php  // cookie2.php
declare(strict_types=1);
ob_start(); // 右記を回避: Warning: Cannot modify header information - headers already sent by 

$num = random_int(0, 999);
var_dump($num);

// setcookie('foo', $num); // Fatal error: Uncaught TypeError: setcookie(): Argument #2 ($value) must be of type string, int given in
setcookie('foo', (string) $num);

var_dump($_COOKIE);

ob_end_flush(); // ob_start() と対なので、書いておくほうがよい
