<?php  // read_csv.php
//  https://dev2.m-fr.net/アカウント名/read_csv.php

//
$csv_file_name = __DIR__ . '/dummy.csv';

//
$fp = fopen($csv_file_name, 'r');

//
while($datum = fgetcsv($fp)) {
    //$line = mb_convert_encoding($line, 'UTF-8', 'SJIS');
    foreach($datum as $k => $s) {
        $s = mb_convert_encoding($s, 'UTF-8', 'SJIS');
        echo "{$k}: {$s}<br>\n";
    }
    echo "<br>\n";
}

/*
while($line = fgets($fp)) {
    $line = mb_convert_encoding($line, 'UTF-8', 'SJIS');
    $datum = explode(',', $line);
    var_dump($datum);
}
*/

//
fclose($fp);
