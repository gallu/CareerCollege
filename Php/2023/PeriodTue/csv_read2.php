<?php  // csv_read2.php

$fn = "/tmp/data.csv";

//
$fobj = new SplFileObject($fn);
$fobj->setFlags(SplFileObject::READ_CSV | SplFileObject::DROP_NEW_LINE);

foreach ($fobj as $no => $row) {
    // 文字コードを変換
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS-win');
    var_dump($row);
}
