<?php  // file_read3.php

$fileName = __FILE__;

$fobj = new SplFileObject($fileName);
//var_dump($fobj);

foreach ($fobj as $no => $line) {
    echo "{$no}: {$line}<br>";
}
