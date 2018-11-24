<?php  // init.php

// セッションの開始
ob_start();
session_start();

// 認可処理classの読み込み
require_once('./Authorization.php');


