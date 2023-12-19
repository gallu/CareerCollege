<?php  // logout.php
declare(strict_types=1);
ob_start();
session_start();
require_once __DIR__ . "/Authorization.php";

// ログアウトさせる
(new Authorization())->offLogin($r);

header("Location: ./auth_login.html");
