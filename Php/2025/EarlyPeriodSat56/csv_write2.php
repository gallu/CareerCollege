<?php  // csv_write2.php

$data = [
    [1, 2, 3],
    [11, 22, 33],
    ['1st', '2n,d', '3rd'],
];

echo "<pre>";

$fp = fopen("php://output", "w");
// var_dump($fp);

foreach ($data as $datum) {
    fputcsv($fp, $datum, escape: "");
}

fclose($fp);
