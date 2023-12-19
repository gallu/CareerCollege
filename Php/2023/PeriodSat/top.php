<?php  // top.php
declare(strict_types=1);
ob_start();
session_start();
require_once __DIR__ . "/Authorization.php";

// 認可check
$auth = new Authorization();
if (false === $auth->isLogin()) {
    // header("Location: ./index.php");
    echo "認可されてません!!";
    exit;
}

?><!DOCTYPE HTML>
<h1>ログイン後　TopPage</h1>
<a href="./logout.php">ログアウト</a><br>
