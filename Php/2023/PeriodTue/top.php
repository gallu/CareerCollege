<?php // top.php
declare(strict_types=1);
ob_start();
session_start();

require_once __DIR__ . "/Authorization.php";

$auth = new Authorization();
if (false ===  $auth->isLogin()) {
    header("Location: ./auth_login.html");
    exit;
}


?><!doctype html>
<h1>ログイン後TopPage</h1>
<a href="./logout.php">ログアウト</a>

