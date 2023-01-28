<?php  // file_csv.php

$fn = __DIR__ . '/dummy.csv';

//
$fp = fopen($fn, 'r');
/*
while(false !== ($line = fgets($fp))) {
    $line = mb_convert_encoding($line, 'UTF-8', 'SJIS');
    $datum = explode(',', $line);
    var_dump($datum);
}
*/
while(false !== ($datum = fgetcsv($fp))) {
    foreach($datum as $k => $v) {
        $v = mb_convert_encoding($v, 'UTF-8', 'SJIS');
        echo "{$k}: {$v}<br>\n";
    }
    echo "<br>\n";
}


//
fclose($fp);
