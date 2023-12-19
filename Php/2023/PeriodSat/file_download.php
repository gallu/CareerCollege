<?php  // file_download.php

// 認証認可処理とか

// https://dev2.m-fr.net/furu/php_2/file_download.php?fn=sample
// https://dev2.m-fr.net/furu/php_2/file_download.php?fn=../../../../../../../../../../../../etc/passwd

//
$fn = $_GET["fn"];
//
$whilte_list = [
    "sample" => "sample.pdf",
];
// チェック
if (false === isset($whilte_list[$fn])) {
    echo "なにしとん？？？";
    exit;
}

header("Content-type: application/pdf");
header("Content-Disposition: attachment; filename={$whilte_list[$fn]}");

echo file_get_contents("/tmp/{$fn}");
