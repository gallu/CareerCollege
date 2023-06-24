<?php  // file3.php

$fobj = new SplFileObject(__FILE__);
// var_dump($fobj);

foreach($fobj as $no => $line) {
    echo "{$no}: {$line}";
}
