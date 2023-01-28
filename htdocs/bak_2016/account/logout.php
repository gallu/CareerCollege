<?php
/*
 * logout.php
 */
//
require_once('init.php');

// ログアウト
unset($_SESSION['user_id']);

// Topに飛ばす
header('Location: ./index.php');
