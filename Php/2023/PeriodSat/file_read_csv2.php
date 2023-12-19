<?php  // file_read_csv2.php

$fn = '/tmp/data.csv';

$fobj = new SplFileObject($fn);
$fobj->setFlags(SplFileObject::READ_CSV);
// var_dump($fobj);

foreach ($fobj as $no => $row) {
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS');
    var_dump($row);
}
