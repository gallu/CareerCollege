<?php  // download2.php

// var_dump($_GET);

$fn = $_GET['fn'] ?? null;
if (null === $fn) {
    // XXXXXX
    exit;
}

// 第一種whiteリスト(許可されたファイルの一覧)の作成
$white_list = [
    'test.xlsx' => true,
];

// チェック
if (false === isset($white_list[$fn])) {
    // XXXXXX
    echo "くらっく？";
    exit;
}

//
// ヘッダの出力
// header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Disposition: attachment; filename="down.xlsx"');

// ファイルの出力
// echo file_get_contents(__DIR__ . "/{$fn}");
echo __DIR__ . "/{$fn}";

