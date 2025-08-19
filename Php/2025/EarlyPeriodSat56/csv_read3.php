<?php  // csv_read3.php

echo "<pre>";

$fn = "/var/www/html/ADD_2504.CSV";
$fobj = new SplFileObject($fn);
$fobj->setFlags(SplFileObject::READ_CSV); // ここがミソ
foreach ($fobj as $no => $rows) {
    $rows = mb_convert_encoding($rows, 'UTF-8', 'SJIS-win');
    //
    echo "{$no}: ";
    foreach ($rows as $r) {
        echo htmlspecialchars($r), ":";
    }
    echo "\n";
}
