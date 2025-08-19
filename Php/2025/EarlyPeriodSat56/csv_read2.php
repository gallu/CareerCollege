<?php  // csv_read2.php

echo "<pre>";

// これも「ダメ」なパターン
$fn = "/var/www/html/ADD_2504.CSV";
$fobj = new SplFileObject($fn);
foreach ($fobj as $no => $line) {
    $line = mb_convert_encoding($line, 'UTF-8', 'SJIS-win');
    // カンマで分解する: 「絶対」やっちゃダメ！！！
    $rows = explode(',', $line);
    //
    echo "{$no}: ";
    foreach ($rows as $r) {
        echo htmlspecialchars($r), ":";
    }
    echo "\n";
}
