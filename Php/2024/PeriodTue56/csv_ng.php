<?php  // csv_ng.php

$fn = '/var/www/html/47OKINAW.CSV';

$fobj = new SplFileObject($fn);
foreach ($fobj as $no => $line) {
    $line = mb_convert_encoding($line, 'UTF8', 'SJIS');
    // やっちゃダメ！！！
    $datum = explode(',', $line);
    var_dump( $datum );
}

