<?php
// top.php
session_start();

// 認証確認
if (true === isset($_SESSION['user'])) {
    // 非認証状態だから入れない！！
    exit;
}

