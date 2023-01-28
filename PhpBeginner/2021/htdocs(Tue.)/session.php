<?php   // session.php
ob_start();
session_start();

$i = intval($_SESSION['count'] ?? '0');
echo "count: {$i} \n<br>\n";
//
$r = random_int(1, 999);
$i = $i + $r;
echo "add: {$r} \n<br>\n";
// セッションに書き込み
$_SESSION['count'] = $i;

//
ob_end_flush();
