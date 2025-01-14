<?php  // session2_read.php
ob_start();

require_once __DIR__ . "/session2_hoge.php";

session_start();

var_dump($_SESSION);

ob_end_flush();
