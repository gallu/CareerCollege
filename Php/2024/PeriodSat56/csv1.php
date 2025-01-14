<?php  // csv1.php

$fn = "/var/www/html/sample.csv";
$fp = fopen($fn , "r");

while(false !== ($line = fgets($fp))) {
    $line = rtrim($line);
    $datum = explode(",", $line); // これは「ぜったいに」やっちゃだめ！！！！！
    // echo "{$line}";
    var_dump($datum);
}

fclose($fp);

