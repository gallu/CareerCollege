<?php  // file_download2.php
//https://dev2.m-fr.net/アカウント名/file_download2.php
// CSV動的にダウンロード

// ファイル名を作成
$fn = "hogedata." . date("Ymdhis") . ".csv";
//var_dump($fn);

$data = [
    ["hoge", "foo", "bar"],
    [111, 222, 333],
    ["1,1", "2,2", "3,3"],
];

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename={$fn}");

$stdout = fopen('php://output', 'w');

foreach($data as $datum) {
    fputcsv($stdout, $datum);
}

fclose($stdout);
