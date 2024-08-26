<?php  // csv2.php

$fn = '/var/www/html/47OKINAW.CSV';

$fobj = new SplFileObject($fn);
$fobj->setFlags(SplFileObject::READ_CSV);

foreach ($fobj as $no => $datum) {
    $datum = mb_convert_encoding($datum, 'UTF8', 'SJIS');
    var_dump($datum);
}
