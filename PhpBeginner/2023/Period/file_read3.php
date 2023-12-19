<?php  // file_read3.php

$fn = __FILE__;

$fobj = new SplFileObject($fn);
foreach ($fobj as $no => $line) {
    echo "{$no}: {$line} <br>\n";
}
