<?php  // csv_download.php

$data = [
    [1, 2, 3],
    ["hoge", "foo", "bar"],
    ["ho,ge", "fo,o", "b,ar"],
];
// var_dump($data);

$fn = "hoge_data." . date("YmdHis") . ".csv";

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename={$fn}");

$fp = fopen("php://output", "w");
// var_dump($fp);

foreach ($data as $datum) {
    fputcsv($fp, $datum);
}
