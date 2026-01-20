<?php  // write_csv.php

$data = [
    [0, 1, "1st"],
    [10, 222, "2nd"],
    [20, 333, "3rd"],
];

$fp = fopen("php://output", "w");
// var_dump($fp);

foreach ($data as $datum) {
    fputcsv($fp, $datum, escape:"");
}

fclose($fp);

