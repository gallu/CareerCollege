<?php  // file5.php

$fobj = new SplFileObject( __FILE__ );

foreach ($fobj as $no  => $line) {
    echo "{$no}: $line <br>\n";
}
