<?php   // download.php
//  https://dev2.m-fr.net/アカウント名/download.php

$download_filename = 'hoge.' . date('Ymd') . '.csv';

header('content-type: text/csv');
header('Content-Disposition: attachment; filename=' . $download_filename);

//echo file_get_contents( __DIR__ . '/dummy.csv' );
$awk = [
    [1, 2, 3],
    ['abc', 2, 3],
    ['あいうえお', 'a,b,c', 3],
];

/*
//
$fp = fopen('php://memory', 'w');
foreach($awk as $w) {
    fputcsv($fp, $w);
}
fseek($fp, 0, SEEK_SET);
$s = '';
while($line = fgets($fp)) {
    $s .= $line;
}
// 文字コード変換して出力
$s = mb_convert_encoding($s, 'SJIS', 'UTF-8');
echo $s;
*/

//
$file_name = 'php://filter/write=convert.iconv.UTF-8%2FSJIS-win/resource=php://output';
$file_obj = new SplFileObject($file_name, 'w');
foreach($awk  as  $datum) {
    $file_obj->fputcsv($datum);
}

