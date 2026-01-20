<?php  // csv_download.php

$data = [
    [0, 1, "はじめて"],
    [10, 222, "にばんめ"],
    [20, 333, "さんばんめ"],
];

/* 出力処理 */
// ヘッダ
$fn = "test.csv";
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename={$fn}");

// ボディ
$fp = fopen("php://output", "w");
// var_dump($fp);

foreach ($data as $datum) {
    $datum = mb_convert_encoding($datum, 'SJIS', 'UTF-8');
    fputcsv($fp, $datum, escape:"");
}

fclose($fp);


