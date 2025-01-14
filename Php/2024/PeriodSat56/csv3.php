<?php  // csv3.php
$fn = "/var/www/html/sample.csv";
$fobj = new SplFileObject( $fn );
$fobj->setFlags(SplFileObject::READ_CSV | SplFileObject::SKIP_EMPTY);

foreach ($fobj as $no => $datum) {
    var_dump($datum);
}
