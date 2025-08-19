<?php  // form2.php

// var_dumpを「文字列として取得する」小手先テクニック
ob_start();
var_dump($_POST);
$s = ob_get_clean();

//
echo htmlspecialchars($s);
