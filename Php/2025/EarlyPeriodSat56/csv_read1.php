<?php  // csv_read1.php

echo "<pre>";

// １行でとってきているからカラムの分解ができていない
$fn = "/var/www/html/ADD_2504.CSV";
$fobj = new SplFileObject($fn);
foreach ($fobj as $no => $line) {
    $line = mb_convert_encoding($line, 'UTF-8', 'SJIS-win');
    echo "{$no}: ", htmlspecialchars($line);
}
