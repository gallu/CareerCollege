<?php
// session_1.php

// セッション開始
ob_start();
session_start();
//
var_dump($_SESSION);
// データを一つ入れる
$_SESSION['rand'] = mt_rand(0, 1000);
//
var_dump($_SESSION);
