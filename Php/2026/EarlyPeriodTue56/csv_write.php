<?php  // csv_write.php

$file_name = __DIR__ . '/write.csv';
var_dump( is_file($file_name) );
var_dump( is_writable($file_name) );

$data = [
    [1,2,3,],
    [4,"あいう",6,],
    [7,"data,\n datum",9,],
];

$fp = fopen($file_name, 'w');
foreach ($data as $datum) {
    $datum = mb_convert_encoding($datum, 'SJIS-win', 'UTF-8');
    fputcsv($fp, $datum, escape:"");
}

fclose($fp);
