<?php   // bmi_init.php

// セッション開始
ob_start();
session_start();

// XSS対策用関数
function h($s) {
    return htmlspecialchars($s, ENT_QUOTES);
}
