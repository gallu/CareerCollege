<?php  // read_csv_0.php

$fn = '/var/www/html/13TOKYO.CSV';

// これだとダメ
$fp = fopen($fn, "r");
while(false !== ($line = fgets($fp))) {
    echo htmlspecialchars($line), "<br>\n";
}
fclose($fp);
