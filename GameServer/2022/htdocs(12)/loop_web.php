<?php  // loop_web.php

ob_start();
session_start();

$_SESSION['click_num'] ??= 0; // 初回に「keyがない」って言われないための対策
$_SESSION['click_num'] ++;
var_dump($_SESSION['click_num']);

if ($_SESSION['click_num'] >= 5) {
    echo "fin";
    exit;
}

?><!doctype html>
<form action="./loop_web.php" method="post">
    <button>ぼたん</button>
</form>