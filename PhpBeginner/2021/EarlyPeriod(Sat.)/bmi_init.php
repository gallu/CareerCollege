<?php   // bmi_init.php
/*
 * BMI用の初期処理ファイル
 */
//
ob_start();
session_start();

// XSS対策用関数
function h($s) {
    return htmlspecialchars($s, ENT_QUOTES);
}
