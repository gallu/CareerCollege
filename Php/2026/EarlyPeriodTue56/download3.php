<?php  // download3.php
//
$csv_top_header = [
    "items",
    date("Y-m-d H:i:s"),
];
//
$csv_header = [
    "id",
    "name",
    "price",
];
//
$data = [
    ["id" => 1, "name" => "ほげ", "price" => 980],
    ["id" => 2, "name" => "foo", "price" => 500],
    ["id" => 3, "name" => 'ho"ge', "price" => 1280],
];

//
$ds = date("YmdHis");
$download_filename = "sample.{$ds}.csv";

//
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename={$download_filename}");
//
$fp = fopen("php://output", "w");
// ヘッダの出力
fputcsv($fp, $csv_top_header, escape:"");
fputcsv($fp, $csv_header, escape:"");
// 
foreach ($data as $datum) {
    $datum = mb_convert_encoding($datum, 'SJIS-win', 'UTF-8');
    fputcsv($fp, $datum, escape:"");
}
fclose($fp);
