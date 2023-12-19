<?php  // file_read_csv.php

$fileName = "/tmp/13TOKYO.csv";
var_dump($fileName);

//
$fp = fopen($fileName, 'r');
var_dump($fp);

//
while(true) {
    $row = fgetcsv($fp);
    if (false === $row) {
        break;
    }
    $row = mb_convert_encoding($row, "UTF-8", "SJIS");
    var_dump($row);
}

//
fclose($fp);
