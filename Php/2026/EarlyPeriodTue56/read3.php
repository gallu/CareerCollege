<?php  // read3.php

$file_name = __FILE__ ;

$fobj = new SplFileObject($file_name);
foreach ($fobj as $k => $line) {
    echo "{$k}: ", htmlspecialchars($line), "<br>";
}
