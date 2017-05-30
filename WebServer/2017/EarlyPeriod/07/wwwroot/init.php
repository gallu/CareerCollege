<?php
// init.php
// 初期処理用プログラム

// セッションを開始する
ob_start();
session_start();

// Smartyの設定
require_once( __DIR__ . '/smarty_init.php');

