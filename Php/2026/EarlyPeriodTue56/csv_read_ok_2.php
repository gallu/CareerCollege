<?php  // csv_read_ok_2.php

$file_name = '/var/www/html/13TOKYO.CSV';
// var_dump( is_file($file_name) );
// var_dump( is_readable($file_name) );

$fobj = new SplFileObject($file_name);
$fobj->setFlags(SplFileObject::READ_CSV);

foreach ($fobj as $no => $row) {
    $row_e = mb_convert_encoding($row, 'UTF-8', 'SJIS-win');
    var_dump($row_e);
}

