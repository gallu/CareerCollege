<?php  // download2.php

$fn = strval($_GET["fn"] ?? "");
var_dump($fn);

// $fn = "./{$fn}";
var_dump( realpath($fn) );

// 第一種ホワイトリスト
$whitelist = [
    "pdf_test.pdf" => [
        "file_name" => "./pdf_test.pdf",
        "content-type" => "application/pdf",
    ],
    // 以下いろいろ
];

if (false === isset($whitelist[$fn])) {
    echo "エラー。クラックした?";
    exit;
}

echo "ok";

// XXX 以下、ダウンロードのコードを書く
