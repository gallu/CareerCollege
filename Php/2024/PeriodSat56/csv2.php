<?php // csv2.php
$fn = "/var/www/html/sample.csv";
$fp = fopen($fn , "r");

while(false !== ($datum = fgetcsv($fp))) {
    var_dump($datum);
}

fclose($fp);
