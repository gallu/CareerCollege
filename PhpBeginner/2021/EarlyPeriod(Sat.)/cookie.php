<?php  // cookie.php
//
ob_start();


$count = intval($_COOKIE['count'] ?? '0');
var_dump($count);
$count += random_int(1, 99);
var_dump($count);
// 新しい値をセット
setcookie('count', strval($count));

//
ob_end_flush();