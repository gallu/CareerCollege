<?php  // read_file_3.php

$fn = __FILE__;

$fobj = new SplFileObject($fn);
foreach ($fobj as $k => $v) {
    echo "{$k}: ", htmlspecialchars($v), "<br>\n";
}
