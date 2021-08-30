<?php   // session.php
//
ob_start();
session_start();

$count = intval($_SESSION['count'] ?? '0');
var_dump($count);
$count += random_int(1, 99);
var_dump($count);
// 新しい値をセット
$_SESSION['count'] = $count;

//
ob_end_flush();