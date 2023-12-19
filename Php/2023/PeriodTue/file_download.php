<?php  // file_download.php

// 認証処理とか認可処理とか

$fn = $_GET["fn"];
// var_dump($fn);

// (第一種)ホワイトリスト作成
$w_list = [
    "sample" => "/tmp/sample.php",
    // "sample" => ["real_file" => "/tmp/sample.php", "content-type" => "XXXX", "down_filename" => ""],
];
// 存在判定
if (false === isset($w_list[$fn])) {
    echo "ンなファイル、ないよ？";
    exit;
}
// echo "ダウンロードできるよ！！";
// exit;


// ダウンロード処理
header("Content-type: application/pdf");
header("Content-Disposition: attachment; filename={$fn}.pdf");

echo file_get_contents($w_list[$fn]);
