<?php  // file3.php

$fobj = new SplFileObject(__FILE__);
foreach ($fobj as $no => $line) {
    echo "{$no}: {$line}";
}
