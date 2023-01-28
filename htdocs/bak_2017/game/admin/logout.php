<?php
// logout.php
session_start();

// ログアウト
unset($_SESSION['auth']);

// 移動
header('Location: ./index.html');
