<?php   // cookie.php
ob_start();


$i = intval($_COOKIE['count'] ?? '0');
echo "count: {$i} \n<br>\n";
//
$r = random_int(1, 999);
$i = $i + $r;
echo "add: {$r} \n<br>\n";
// Cookieに書き込み
setcookie('count', "{$i}");

//
ob_end_flush();
