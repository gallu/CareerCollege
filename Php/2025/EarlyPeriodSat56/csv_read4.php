<?php  // csv_read4.php

echo "<pre>";

$fn = "/var/www/html/ADD_2504.CSV";
$fp = fopen($fn, "r");
while( false !== ($rows = fgetcsv($fp, escape:"")) ) { // fgetcsv() がミソ
    $rows = mb_convert_encoding($rows, 'UTF-8', 'SJIS-win');
    //
    foreach ($rows as $r) {
        echo htmlspecialchars($r), ":";
    }
    echo "\n";
}
fclose($fp);
