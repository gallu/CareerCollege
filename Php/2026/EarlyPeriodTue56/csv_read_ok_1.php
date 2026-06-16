<?php  // csv_read_ok_1.php

$file_name = '/var/www/html/13TOKYO.CSV';
// var_dump( is_file($file_name) );
// var_dump( is_readable($file_name) );

$fp = fopen($file_name, 'r');
while(false !== ($row = fgetcsv($fp, escape:""))) {
    $row_e = mb_convert_encoding($row, 'UTF-8', 'SJIS-win');
    var_dump($row_e);
}

fclose($fp);

