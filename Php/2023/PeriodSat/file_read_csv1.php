<?php  // file_read_csv1.php

$fn = '/tmp/data.csv';

//
$fp = fopen($fn, 'r');

//
while(false !== ($row = fgetcsv($fp))) {
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS');
    var_dump($row);
}

//
fclose($fp);
