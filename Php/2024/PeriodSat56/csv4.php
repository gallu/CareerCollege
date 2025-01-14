<?php  // csv4.php
$fn = "/var/www/html/47OKINAW.csv";
$fobj = new SplFileObject( $fn );
$fobj->setFlags(SplFileObject::READ_CSV | SplFileObject::SKIP_EMPTY);

foreach ($fobj as $no => $datum) {
    $datum = mb_convert_encoding($datum, "UTF-8", "SJIS-win");
    var_dump($datum);
    break;
}
