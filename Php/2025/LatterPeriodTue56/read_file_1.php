<?php  // read_file_1.php

$fn = __FILE__;

//
$fp = fopen($fn, "r");
while(false !== ($line = fgets($fp))) {
    echo htmlspecialchars($line), "<br>\n";
}
fclose($fp);

