<?php  // csv_write2.php
$fn = __DIR__ . "/write.csv";
$data = [
    ["1,2", "3,4", "5,6"],
    [9,8,7],
    [3,2,1],
];

$fobj = new SplFileObject($fn, "w");
foreach ($data as $no => $datum) {
    $fobj->fputcsv($datum);
}

echo "fin";