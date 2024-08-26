<?php  // csv1.php

$fn = '/var/www/html/47OKINAW.CSV';

$fp = fopen($fn, 'r');
while(false !== ($datum = fgetcsv($fp))) {
    $datum = mb_convert_encoding($datum, 'UTF8', 'SJIS');
    var_dump($datum);
}

fclose($fp);
