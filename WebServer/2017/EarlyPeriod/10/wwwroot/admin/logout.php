<?php
// admin/logout.php
require_once( __DIR__ . '/../init.php');

// セッション内のログイン情報を破棄
unset($_SESSION['admin_auth']);

// indexに移動させる
header('Location: ./index.php');
