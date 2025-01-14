<?php  // session2.php
ob_start();

require_once __DIR__ . "/session2_hoge.php";

session_start();

$obj = new Hoge(123);
$_SESSION["hoge"] = $obj;

var_dump($_SESSION);

ob_end_flush();
