<?php  // csv_write1.php

$fn = __DIR__ . "/write.csv";
var_dump( is_writable($fn) );

$data = [
    [3,2,1],
    [9,8,7],
    ["1,2", "3,4", "5,6"],
];

$fp = fopen($fn, "w");

foreach ($data as $k => $datum) {
    fputcsv($fp, $datum);
}

fclose($fp);
