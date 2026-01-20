<?php  // read_csv_1.php

$fn = '/var/www/html/13TOKYO.CSV';

//
$fp = fopen($fn, "r");
while(false !== ($line = fgetcsv($fp, escape:""))) {
    // 文字コードの変更
    $line_utf8 = mb_convert_encoding($line, 'UTF-8', 'SJIS');
    // var_dump($line_utf8);
    foreach ($line_utf8 as $v) {
        echo htmlspecialchars($v), "<br>\n";
    }
    echo "<br>\n";
}
fclose($fp);
