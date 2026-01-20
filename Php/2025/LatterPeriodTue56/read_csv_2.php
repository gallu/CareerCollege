<?php  // read_csv_2.php

$fn = '/var/www/html/13TOKYO.CSV';

$fobj = new SplFileObject($fn);
$fobj->setFlags(SplFileObject::READ_CSV);
foreach ($fobj as $k => $v) {
    // 文字コードの変更
    $line_utf8 = mb_convert_encoding($v, 'UTF-8', 'SJIS');
    // var_dump($line_utf8);
    foreach ($line_utf8 as $v) {
        echo htmlspecialchars($v), "<br>\n";
    }
    echo "<br>\n";
}
