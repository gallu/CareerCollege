<?php
// admin/session_1.php
ob_start();
session_start(); // セッションを開始

// 乱数を作成、保存、表示
$r = mt_rand(1, 1000); // 作成
$_SESSION['rand'] = $r; // 保存
var_dump($_SESSION['rand']); // 表示
